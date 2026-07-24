<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function customers(Request $req){
        $data = User::orderBy('name', 'ASC')->where('role', 'User');
        if($req->filled('id')){
            $data->where('id', $req->id);
        }
        if($req->filled('name')){
            $data->where('name', 'LIKE','%'.$req->name.'%');
        }
        if($req->filled('email')){
            $data->where('email', 'LIKE','%'.$req->email.'%');
        }
        if($req->filled('phone')){
            $data->where('phone', 'LIKE','%'.$req->phone.'%');
        }
        if($req->filled('active')){
            $active = $req->active;
            if($active == "inactive") $data->whereNull('email_verified_at');
            else $data->whereNotNull('email_verified_at');
        }
        $data = $data->withCount(['orders','pendingOrders','wishlistProducts'])->withSum('orders as total_spent', 'final_amt')->paginate(30);
        return view('users.customers',['data' => $data]);
    }
    public function index(Request $req){
        $data = User::orderBy('name', 'ASC')->whereIn('role', ['Superadmin','Admin']);
        if($req->filled('id')){
            $data->where('id', $req->id);
        }
        if($req->filled('name')){
            $data->where('name', 'LIKE','%'.$req->name.'%');
        }
        if($req->filled('email')){
            $data->where('email', 'LIKE','%'.$req->email.'%');
        }
        if($req->filled('phone')){
            $data->where('phone', 'LIKE','%'.$req->phone.'%');
        }
        if($req->filled('role')){
            $data->where('role', $req->role);
        }
        if($req->filled('active')){
            $active = $req->active;
            if($active == "inactive") $data->whereNull('email_verified_at');
            else $data->whereNotNull('email_verified_at');
        }
        $data = $data->paginate(30);
        return view('users.index',['data' => $data]);
    }
    public function create(){
        $user = [];
        $roles = ['Superadmin','Admin'];
        return view('users.create',['data' => $user,'roles' => $roles]);
    }
    public function store(Request $req){
        $req->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:100',
            'password' => 'required|string|min:8',
            'role' => 'required|string|max:30',
            'allow_login' => 'boolean',
        ]);
        $val = new User;
        $val->fill($req->except(['password', 'type']));
        if ($req->filled('password')) {
            $val->password = Hash::make($req->password);
        }
        if ($req->allow_login == 1) {
            $val->email_verified_at = Carbon::now();
        } else {
            $val->email_verified_at = null;
        }
        $val->save();
        ActivityLog::create([
            'user_id' => auth()->user()->id,
            'user_name' => auth()->user()->name,
            'user_email' => auth()->user()->email,
            'activity' => "Created New User ".$req->email." of role ".$req->role,
            'url' => $req->fullUrl(),
            'method' => $req->method(),
            'ip_address' => $req->ip(),
            'user_agent' => $req->header('User-Agent'),
        ]);
        return redirect()->route('users.index')->with('global','User is added.')->with('type','success');
    }
    public function show(string $id) {
        $user = User::find($id);
        return view('users.create',['data' => $user]);
    }
    public function edit($id){
        $user = User::find($id);
        $roles = ['Superadmin','Admin'];
        return view('users.create',['data' => $user,'roles' => $roles]);
    }
    public function update(Request $req, $id){
        $val = User::findOrFail($id);
        $req->validate([
            'name' => 'required|string|max:100',
            // 'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:100',
            'password' => 'nullable|string|min:8',
            'role' => 'required|string|max:30',
            'allow_login' => 'boolean',
        ]);
        $val->fill($req->except(['password', 'type']));
        if ($req->filled('password')) {
            $val->password = Hash::make($req->password);
        }
        if ($req->allow_login == 1) {
            $val->email_verified_at = Carbon::now();
        } else {
            $val->email_verified_at = null;
        }
        $val->save();
        ActivityLog::create([
            'user_id' => auth()->user()->id,
            'user_name' => auth()->user()->name,
            'user_email' => auth()->user()->email,
            'activity' => "Updated User ".$req->email." of role ".$req->role,
            'url' => $req->fullUrl(),
            'method' => $req->method(),
            'ip_address' => $req->ip(),
            'user_agent' => $req->header('User-Agent'),
        ]);
        return redirect()->route('users.index')->with('global','User is updated.')->with('type','success');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
