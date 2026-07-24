@extends('layouts.front')
@section('social')
<title>My Wishlist  | {{env('APP_NAME')}}</title>
<!-- For Social Media & SEO -->
<meta property="og:title" content="My Wishlist  | {{env('APP_NAME')}}" >
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
          <h1 class="text-dark h2 mb-3">My Wishlist</h1>
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('account')}}">My Account</a></li>
                  <li class="breadcrumb-item active" aria-current="page">My Wishlist</li>
              </ol>
          </nav>
          <div class="address-choose">
            <div class="row">
                @if(count($products))
                @foreach($products as $p)
                    <div class="col-lg-4 col-6">
                        <div class="product-list-wrapper">
                            <a href="{{route('fullview',['category'=>$p->categories[0]->slug,'slug' => $p->slug])}}" class="product-image">
                                <img src="{{(!is_null($p->base_img))? asset('storage/products/small/'.$p->base_img) : asset('img/blank.jpg')}}" alt="" class="img-fluid">
                                @if($p->discount_percent)<span class="discount">{{$p->discount_percent}}%</span>@endif
                            </a>
                            <h5><a href="{{route('fullview',['category'=>$p->categories[0]->slug,'slug' => $p->slug])}}">{{$p->name}}</a></h5>
                            <div class="product-price">
                                <span class="price-sale">₹ {{$p->showoff_price}}</span>
                                @if($p->discount_percent)<span class="price-regular">₹ {{$p->regular_showoff_price}}</span>@endif
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                    <div class="col-lg-4 col-6"><div class="product-list-wrapper"><h5>No products found</h5></div></div>
                @endif
            </div>
          </div>
        </div>
        <div class="col-lg-4">
            <div class="widget sticky-item">
                <div class="card">
                    <div class="card-body p-4">
                    <i class="ri-article-line fs-2"></i>
                        <h5 class="card-title body-font">Enter details for Invoicing</h5>
                        <p class="card-text">We’re hiding some account details to protect your identity.</p>
                    </div>
                </div>
                
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection