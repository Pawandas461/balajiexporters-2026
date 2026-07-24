@extends('layouts.front')
@section('social')
<title>Login | {{env('APP_NAME')}}</title>
<!-- For Social Media & SEO -->
<meta property="og:title" content="Login | {{env('APP_NAME')}}" >
<meta name="description" content="" >
<meta property="og:description"  content="" >
<meta name="keywords" content="">
<meta property="og:image" content="{{asset('img/'.env('APP_LOGO_URL'))}}">
<meta property="og:url" content="{{url()->full()}}">
<link rel="canonical" href="{{url()->full()}}"/>
<meta name="twitter:card" content="summary_large_image">
<!-- For Social Media & SEO -->
@endsection
@section('content')


<section class="section pt-8">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 ">
                <div id="s1" class="p-3 p-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-primary text-center">Login / Register with us</h3>
                    <p class="text-center">Enter your email to continue</p>
                    <form id="loginform">
                        <div class="mb-3">
                        <label>Email address</label>
                        <div class="input-with-icon mb-3" >
                            <span class="icon"><i class="ri-mail-line"></i></span>
                            <input type="text" class="form-control" name="email" ng-model="data.register.email" required="">
                        </div> 
                        </div>
                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-primary" ng-click="sendOtp('{{route('emailCheck')}}', '{{csrf_token()}}')">Send one time password</button>
                        </div>
                    </form>
                   
                </div>

                <div id="s2" style="display: none;" class="p-3 p-lg-5" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-primary text-center">Enter OTP</h3>
                    <p class="text-center">OTP has been sent to your email: <strong>@{{data.register.email}}</strong></p>
                    <form id="otpForm">
                        <div class="text-center mb-3">
                            <input type="text" class="form-control text-center" id="sotp" ng-model="data.register.otp"  name="otp" placeholder="****" required="" maxlength="6">
                        </div>
                        <div class="d-grid gap-2 mb-4">
                            <button type="submit" class="btn btn-primary" ng-click="checkOtp('{{route('emailLogin')}}', '{{csrf_token()}}','{{request()->type}}','{{request()->type1}}','{{request()->redirect}}')">Continue</button>
                        </div>
                        <div class="mb-5 text-center">
                            <p>OTP Sent to your phone. Wait <strong>60 Seconds</strong></p>
                            <p><a href="javascript:void(0)"  ng-click="sendOtp('{{route('emailCheck')}}', '{{csrf_token()}}')" id="resentOtp" style="display: none;">Resend OTP</a></p>
                        </div>

                        <div id="s3" style="display: none;" class="change-number mt30 text-center">
                            <a href="javascript:void(0)" ng-click="changeEmail()"  class="link">Change email</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




{{-- <section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 ">
                <div id="s1" class="p-3 p-lg-5">
                    <h3 class="text-primary text-center">Login / Register with us</h3>
                    <p class="text-center">Enter your email to continue</p>

                    <form name="loginform" id="loginform">
                        <div class="mb-3">
                            <label>Email address</label>
                            <div class="input-with-icon mb-3">
                                <span class="icon"><i class="ph ph-envelope"></i></span>
                                <input type="email" id="sphn" name="email" ng-model="data.register.email" class="form-control" required autofocus >
                            </div>
                        </div>
                        <div class="d-grid gap-2 mb-3">
                            <a type="submit" ng-click="sendOtp('{{route('emailCheck')}}', '{{csrf_token()}}')" class="btn btn-primary">Send one time password</a>
                        </div>
                    </form>
                </div>

                <div id="s2" style="display: none;" class="p-3 p-lg-5">
                    <h3 class="text-primary text-center">Enter OTP</h3>
                    <p class="text-center">OTP has been sent to your email: <strong>@{{data.register.email}}</strong></p>
                    <form name="otpForm" id="otpform">
                        <div class="text-center mb-3">
                            <input type="number" name="otp" id="sotp" ng-model="data.register.otp" class="form-control text-center" placeholder="****" required="" maxlength="6" minlength="6">
                        </div>
                        <div class="d-grid gap-2 mb-4">
                            <a type="submit" ng-click="checkOtp('{{route('emailLogin')}}', '{{csrf_token()}}','{{request()->type}}','{{request()->type1}}','{{request()->redirect}}')" class="btn btn-primary">Continue</a>
                        </div>
                        <div class="mb-5 text-center">
                            <p>OTP Sent to your phone. Wait <strong class="will-show" id="secCounter">60 Seconds</strong></p>
                            <p><a href="javascript:void(0)" ng-click="sendOtp('{{route('emailCheck')}}', '{{csrf_token()}}')" id="resentOtp" style="display: none;">Resend OTP</a></p>
                        </div>

                        <div id="s3" style="display: none;" class="change-number mt30 text-center">
                            <a href="javascript:void(0)" ng-click="changeEmail()" class="link">Change email</a>
                        </div>

                    </form>
                </div><!-- auth box -->

            </div>
        </div>
    </div>
</section> --}}
@endsection