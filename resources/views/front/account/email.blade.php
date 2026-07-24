@extends('layouts.front')
@section('social')
<title>Change Email | {{env('APP_NAME')}}</title>
<!-- For Social Media & SEO -->
<meta property="og:title" content="Change Email | {{env('APP_NAME')}}" >
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
        <div class="row">
            <div class="col-lg-8 pe-lg-5">
                <h1 class="text-dark h2 mb-3">Change Email</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('account')}}">My Account</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Change Email</li>
                    </ol>
                </nav>
                @if(Session::has('check-otp'))
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="opt">
                                <p>OTP has been sent to your email: <strong>{{auth()->user()->email_change}}</strong></p>
                                <form action="{{route('changeEmailPost')}}" method="POST" id="otpForm">
                                    @csrf
                                    @method('patch')
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="otp" placeholder="****" required="" maxlength="4">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Continue</button>
                                    </div>
                                    <div class="form-group">
                                        <p>OTP Sent to your phone. Wait <strong>60 Seconds</strong></p>
                                        <p><a href="{{route('changeEmail')}}">Resend OTP</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <form action="{{route('changeEmailOtp')}}" method="POST" class="widget">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email <span>*</span></label>
                                    <input type="email" class="form-control" maxlength="100" name="email" value="{{auth()->user()->email}}" required="">
                                    @error('email')
                                        <label id="email-error" class="error" for="email">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Send OTP</button>
                        </div>
                        @csrf
                        @method('patch')
                    </form>
                @endif
            </div>

            <div class="col-lg-4">
                <div class="widget sticky-item">
                    <div class="card">
                        <div class="card-body p-4">
                            <i class="ri-information-line fs-2"></i>
                            <h5 class="card-title body-font">Why isn’t my info shown here?</h5>
                            <p class="card-text">We’re hiding some account details to protect your identity.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection