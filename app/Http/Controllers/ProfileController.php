<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Address;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
// use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Redirect;
// use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class ProfileController extends Controller
{
    public function account() {
        if(auth()->user()->role == 'Superadmin') return redirect()->route('dashboard');
        return view('front.account.account');
    }
    public function wishlist(){
        $list = auth()->user()->wishlistProducts()->pluck('products.id')->all();
        $products = Product::where('active', 1)->whereIn('id',$list)->with(['categories'])
            ->whereHas('categories', function (Builder $query) {
                $query->where('categories.active', 1);
            })
            ->select('*', DB::raw("IF(regular_price != offer_price , ROUND(((regular_price - offer_price) * 100) / regular_price) , 0) AS discount_percent"), DB::raw("ROUND( offer_price * (1 + (gst/100)) ) AS showoff_price"), DB::raw("ROUND( regular_price * (1 + (gst/100)) ) AS regular_showoff_price"))->withCount(['categories'])->get();
        return view('front.account.wishlist', ['products' => $products]);
    }
    public function profileEdit(){
        return view('front.account.profile');
    }
    public function edit(Request $request) {
        return view('admin.profile', [
            'user' => $request->user(),
        ]);
    }
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());
        $request->user()->save();
        return back()->with('status', 'profile-updated');

        // if ($request->user()->isDirty('email')) {
        //     $request->user()->email_verified_at = null;
        // }
    }
    public function changeEmail(){
        return view('front.account.email');
    }
    public function changeEmailOtp(Request $request,){
        $request->validate([
            'email' => 'email|string|max:100|unique:users'
        ]);
        try{
            $email = $request->email;
            $otp = rand(1000,9999);
            Mail::send('mails.sendOtp', ['otp' => $otp], function($message) use ($email) {    
                $message->to($email)->subject('OTP to verify email');    
            });
        } catch(\Exception $e){}
        auth()->user()->update(['email_otp' => $otp, 'email_change' => $email]);
        return redirect()->route('changeEmail')->with('check-otp',true)->with('global','OTP is send.')->with('type','success');
    }
    public function changeEmailPost(Request $request,){
        if($request->otp == $request->user()->email_otp){
            $request->user()->email = $request->user()->email_change;
            $request->user()->email_change = null;
            $request->user()->email_otp = null;
            $request->user()->email_verified_at = Carbon::now();
            $request->user()->save();
            return redirect()->route('profileEdit')->with('global','Email is changed successfully.')->with('type','success');
        }
        return redirect()->route('changeEmail')->with('check-otp',true)->with('global','OTP did not match.')->with('type','danger');
    }
    public function allOrders(){
        $orders = Order::orderBy('created_at', 'DESC')->where('user_id', auth()->user()->id)->withCount(['orderedProducts'])->paginate(10);
        return view('front.account.orders', ['orders' => $orders]);
    }
    public function viewMyOrder($id,){
        $order = Order::where('id',$id)->where('user_id', auth()->user()->id)->with(['orderedProducts'])->withCount(['orderedProducts'])->first();
        if($order){
            return view('front.account.order-details',['order' => $order]);
        }else return back()->with('global','Order not found.')->with('type','danger');
    }
    public function downloadMyInvoice($id,){
        $order = Order::where('id',$id)->where('user_id',auth()->user()->id)->with('orderedProducts')->first();
        if (!$order) {
            return back()->with('global', 'Order not found.')->with('type', 'warning');
        }
    
        $pdf = Pdf::loadView('invoice.certificate', compact('order'))->setPaper('A4', 'landscape');
    
        return $pdf->download('invoice_order_'.$order->id.'.pdf');
    }
    public function getDeliveryAddresses(){
        $addresses = auth()->user()->addresses()->get();
        return view('front.account.addresses',['addresses' => $addresses]);
    }
    public function getDeliveryAddress(){
        $adr = [];
        return view('front.account.delivery-address',['adr' => $adr,'states' => $this->states()]);
    }
    public function getEditDeliveryAddress($id,){
        $adr = Address::where('id',$id)->where('user_id', auth()->user()->id)->first();
        if($adr){
            return view('front.account.delivery-address',['adr' => $adr,'states' => $this->states()]);
        }else return back()->with('global','Address not found.')->with('type','danger');
    }
    public function postDeliveryAddress(Request $req, ){
        Address::create($req->merge(['country' => 'India', 'user_id' => auth()->user()->id])->all());
        return redirect()->route('getDeliveryAddresses')->with('global','Address is added.')->with('type','success');
    }
    public function postEditDeliveryAddress(Request $req, $id){
        auth()->user()->addresses()->findOrFail($id)->update($req->all());
        return back()->with('global','Address is updated.')->with('type','success');
    }
    public function deleteAddress($id,){
        $adr = Address::where('id',$id)->where('user_id', auth()->user()->id)->first();
        if($adr){
            $adr->delete();
            return back()->with('global','Address is deleted.')->with('type','success');
        }
        return back()->with('global','Address not found.')->with('type','danger');
    }

    /**
     * Delete the user's account.
     */
    // public function destroy(Request $request): RedirectResponse
    // {
    //     $request->validateWithBag('userDeletion', [
    //         'password' => ['required', 'current_password'],
    //     ]);

    //     $user = $request->user();

    //     Auth::logout();

    //     $user->delete();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return Redirect::to('/');
    // }
}
