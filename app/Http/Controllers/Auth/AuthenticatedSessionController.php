<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Models\Wishlist;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    public function emailCheck(Request $req)
    {
        try {
            $userExist = User::where('email', $req->email)->where('block', 0)->first();
            $otp = rand(1000, 9999);
            $email = $req->email;

            if ($userExist) {
                if ($userExist->email_verified_at != null && ($userExist->role === "admin" || $userExist->role === "superadmin")) {
                    return response()->json(['type' => 'error', 'msg' => "Email already verified."]);
                } else {
                    $userExist->update(['email_otp' => $otp]);
                }
            } else {
                $userExist = User::create([
                    'email' => $email,
                    'email_otp' => $otp,
                    'role' => 'user',
                    'password' => Hash::make('12345678'),
                ]);
            }
            Mail::raw("Your OTP for login is: $otp", function ($message) use ($email) {
                $message->to($email)
                    ->subject('Your OTP for Tree Life Login');
            });

            return response()->json(['type' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['type' => 'error', 'msg' => "Something went wrong."]);
        }
    }
    public function emailLogin(Request $req)
    {
        $type = 0;
        if ($req->filled('type') && $req->type != 0) $type = $req->type;
        $userExist = User::where('email', $req->email)->where('block', 0)->first();
        if ($userExist) {
            if ($userExist->email_otp == $req->otp) {
                $userExist->update(['email_otp' => null, 'email_verified_at' => Carbon::now()]);
                Auth::login($userExist);
                if ($type == "cart") $uri = route('cart');
                elseif ($type == "fullview") {
                    $uri = $req->redirect;
                    $product_id = $req->type1;
                    $user = auth()->user();
                    $wishlist = Wishlist::where('user_id', $user->id)->where('product_id', $product_id)->first();

                    if ($wishlist) {
                        $wishlist->delete();
                    } else {
                        Wishlist::create([
                            'user_id' => $user->id,
                            'product_id' => $product_id,
                        ]);
                    }
                } else $uri = route('home');
                return ['type' => 'success', 'uri' => $uri, 'msg' => null, 'donate' => $type];
            } else return ['type' => 'error', 'uri' => null, 'donate' => $type, 'msg' => 'OTP doesn\'t match the records'];
        } else {
            return ['type' => 'error', 'uri' => null, 'donate' => $type, 'msg' => 'Email doesn\'t match the records'];
        }
    }
    public function create()
    {
        return view('front.account.login');
    }
    public function adminLogin()
    {
        return view('admin.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'No account found with this email.',
            ]);
        }

        if (!in_array($user->role, ['admin', 'superadmin'])) {
            return back()->withErrors([
                'email' => 'You are not authorized to access the admin panel.',
            ]);
        }

        if (!Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors([
                'password' => 'Incorrect password.',
            ]);
        }

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
