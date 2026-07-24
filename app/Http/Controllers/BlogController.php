<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\ActivityLog;
use App\Models\Blog;
use App\Models\Bracket;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

class BlogController extends Controller
{
    public function index(Request $req) {
        $data = Blog::orderBy('title', 'ASC')->with(['brackets']);
        if($req->filled('id')){
            $data->where('id', $req->id);
        }
        if($req->filled('title')){
            $data->where('title', 'LIKE','%'.$req->title.'%');
        }
        if($req->filled('status')){
            $data->where('status', $req->status);
        }
        if($req->filled('bracket_id')){
            $category = $req->bracket_id;
            $data->whereHas('brackets', function (Builder $query) use ($category) {
                $query->where('brackets.id', $category);
            });
        }
        $data = $data->paginate(30);
        $categories = Bracket::orderBy('name','ASC')->get();
        return view('blogs.index',compact('data','categories'));
    }
    public function create(){
        $data = [];
        $categories = Bracket::orderBy('name','ASC')->get();
        return view('blogs.create',compact('data','categories'));
    }
    public function store(BlogRequest $req){
        $data = $req->validated();
        $slug = Str::slug($data['title']);
        $slugCount = Blog::where('slug', 'LIKE', "{$slug}%")->count();
        if ($slugCount > 0) {
            $slug = "{$slug}-{$slugCount}";
        }
        $data['slug'] = $slug;
        // Handle main image upload
        if ($req->hasFile('image')) {
            $img = $req->file('image');
            $imgFilename = time() . '_' . $img->getClientOriginalName();

            $smallImagePath = 'blogs/small/' . $imgFilename;
            $image = Image::read($img)->scale(width:400)->encode();
            $bigImagePath = 'blogs/big/' . $imgFilename;
            $image1 = Image::read($img)->scale(width:800)->encode();
            Storage::disk('public')->put($imgFilename, $image);
            Storage::disk('public')->move($imgFilename, $smallImagePath);
            Storage::disk('public')->put($imgFilename, $image1);
            Storage::disk('public')->move($imgFilename, $bigImagePath);
            $data['image'] = $imgFilename;
        }
        $product = Blog::create($data);
        if ($req->has('categories')) {
            $product->brackets()->attach($req->categories);
        }
        ActivityLog::create([
            'user_id' => auth()->user()->id,
            'user_name' => auth()->user()->getRememberTokenName(),
            'user_email' => auth()->user()->email,
            'activity' => "Created New Blog called: ".$product->title,
            'url' => $req->fullUrl(),
            'method' => $req->method(),
            'ip_address' => $req->ip(),
            'user_agent' => $req->header('User-Agent'),
        ]);
    
        return redirect()->route('blogs.index')->with('global', 'Blog created successfully.')->with('type','success');
    }
    public function show(Blog $blog)
    {
        //
    }
    public function edit($id)
    {
        $data = Blog::where('id',$id)->with(['brackets'])->withCount(['brackets'])->first();
        $categories = Bracket::orderBy('name','ASC')->get();
        return view('blogs.create',compact('data','categories'));
    }
    public function update(BlogRequest $req, $id){
        $product = Blog::findOrFail($id);
        $data = $req->validated();
        $slug = $req->slug;
        $slugCount = Blog::where('slug', 'LIKE', "{$slug}%")->count();
        if ($slugCount > 0) {
            $slug = "{$slug}-{$slugCount}";
        }
        $data['slug'] = $slug;
        // Handle main image upload
        if ($req->hasFile('image')) {
            $img = $req->file('image');
            $ext = $img->getClientOriginalName();
            $imgFilename = time() . '_' . $ext;
            $smallImagePath = 'blogs/small/' . $imgFilename;
            $image = Image::read($img)->scale(width:400)->encode();
            $bigImagePath = 'blogs/big/' . $imgFilename;
            $image1 = Image::read($img)->scale(width:800)->encode();
            if(!is_null($product->image)) {
                Storage::disk('public')->delete('blogs/small/' .$product->image);
                Storage::disk('public')->delete('blogs/big/' .$product->image);
            }
            Storage::disk('public')->put($imgFilename, $image);
            Storage::disk('public')->move($imgFilename, $smallImagePath);
            Storage::disk('public')->put($imgFilename, $image1);
            Storage::disk('public')->move($imgFilename, $bigImagePath);
            $data['image'] = $imgFilename;
        }
        
        $product->update($data);
        if ($req->has('categories')) {
            $product->brackets()->sync($req->categories);
        }
        ActivityLog::create([
            'user_id' => auth()->user()->id,
            'user_name' => auth()->user()->name,
            'user_email' => auth()->user()->email,
            'activity' => "Updated the blog called: ".$product->title,
            'url' => $req->fullUrl(),
            'method' => $req->method(),
            'ip_address' => $req->ip(),
            'user_agent' => $req->header('User-Agent'),
        ]);
        return redirect()->route('blogs.index')->with('global', 'Blog updated successfully.')->with('type','success');
    }
    public function destroy(String $id){
        $data = Blog::find($id);
        if($data){
            $path = 'blogs/small/';
            $path1 = 'blogs/big/';
            Storage::disk('public')->delete($path.$data->image);
            Storage::disk('public')->delete($path1.$data->image);
            $data->brackets()->detach();
            $data->delete();
            return redirect()->route('blogs.index')->with('global','Blog is deleted.')->with('type','success');
        }
        return redirect()->route('blogs.index')->with('global','Blog not found.')->with('type','danger');
    }

    public function deleteBlogImage($id){
        $val = Blog::where('id',$id)->first();
        if($val){
            ActivityLog::create([
                'user_id' => auth()->user()->id,
                'user_name' => auth()->user()->name,
                'user_email' => auth()->user()->email,
                'activity' => "Deleted the cover image of blog : ".$val->title,
                'url' => request()->fullUrl(),
                'method' => request()->method(),
                'ip_address' => request()->ip(),
                'user_agent' => request()->header('User-Agent'),
            ]);
            $path = 'blogs/small/';
            $path1 = 'blogs/big/';
            Storage::disk('public')->delete($path.$val->image);
            Storage::disk('public')->delete($path1.$val->image);
            $val->update(['image' => null]);
            return back()->with('global','Blog Image deleted.')->with('type','success');
        }
        return back()->with('global','Blog not found.')->with('type','warning');
    }
}
