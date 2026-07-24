@extends('layouts.front')
@section('social')
<title>Account | {{env('APP_NAME')}}</title>
<!-- For Social Media & SEO -->
<meta property="og:title" content="Account  | {{env('APP_NAME')}}" >
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
<section class="section">
  <div class="container container-small">
      <h1 class="title h2 mb-3">My Account</h1>
      <h5 class="body-font mb-5">Hello, {{auth()->user()->name}}</h5>

      <div class="row">
          <div class="col-md-6">
              <a href="{{route('profileEdit')}}" class="profile-link-box">
                  <div class="icon"><i class="ri-user-line"></i></div>
                  <h4>My Profile</h4>
                  <p>Provide personal details and how we can reach you</p>
                  <i class="ri-arrow-right-s-line arrow-icon"></i>
              </a>
          </div>
          <div class="col-md-6">
              <a href="{{route('allOrders')}}" class="profile-link-box">
                  <div class="icon"><i class="ri-shopping-cart-2-line"></i></div>
                  <h4>All Orders</h4>
                  <p>Provide personal details and how we can reach you</p>
                  <i class="ri-arrow-right-s-line arrow-icon"></i>
              </a>
          </div>
          <div class="col-md-6">
              <a href="{{route('wishlist')}}" class="profile-link-box">
                  <div class="icon"><i class="ri-map-pin-time-line"></i></div>
                  <h4>Wishlist</h4>
                  <p>Your personal favourite collections</p>
                  <i class="ri-arrow-right-s-line arrow-icon"></i>
              </a>
          </div>
          <div class="col-md-6">
              <a href="{{route('changeEmail')}}" class="profile-link-box">
                  <div class="icon"><i class="ri-mail-line"></i></div>
                  <h4>Change Email</h4>
                  <p>Provide personal details and how we can reach you</p>
                  <i class="ri-arrow-right-s-line arrow-icon"></i>
              </a>
          </div>
      </div>

      <div class="row auth-box profile-logout">
        <div class="col-md-12 mt15 change-number">
          <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form1').submit();" >Logout</a>
          <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </div>
  </div>
</section>
@endsection