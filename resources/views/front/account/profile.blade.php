@extends('layouts.front')
@section('social')
<title>Profile  | {{env('APP_NAME')}}</title>
<!-- For Social Media & SEO -->
<meta property="og:title" content="Profile  | {{env('APP_NAME')}}" >
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
    <div class="container ">
      <div class="row">
        <div class="col-lg-8 pe-lg-5">
          <h1 class="text-dark h2 mb-3">My Profile</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('account')}}">My Account</a></li>
              <li class="breadcrumb-item active" aria-current="page">My Profile</li>
            </ol>
          </nav>
          <form method="POST" action="{{route('profile.update')}}" id="pf" class="widget">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="fullname">Name <span>*</span></label>
                        <input type="text" class="form-control" maxlength="150" name="name" placeholder="Full name" id="name" required="" value="{{auth()->user()->name}}">
                        @error('name')
                            <label id="name-error" class="error" for="name">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="email">Email <span>*</span></label>
                        <input type="text" class="form-control disabled" maxlength="100" name="email" value="{{auth()->user()->email}}" required="" readonly>
                        <div class="login-prompt mt-2 text-xs text-end">
                            <a href="{{route('changeEmail')}}">Change Email</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <div><label for="fullname">Phone</label></div>
                        <input type="text" class="form-control d-block" value="{{auth()->user()->phone}}" name="phone" id="phone" maxlength="50">
                        <label id="phone-error" class="error" for="phone"></label>
                        @error('phone')
                            <label id="phone-error1" class="error" for="phone">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" value="{{auth()->user()->business_name}}" maxlength="255" name="company" placeholder="Company name">
                        @error('company')
                            <label id="company-error" class="error" for="company">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control disabled" value="{{auth()->user()->country}}" maxlength="100" name="country">
                        @error('country')
                        <label id="country-error" class="error" for="country">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Save Details</button>
            </div>
            @method('patch')
            @csrf
          </form>
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