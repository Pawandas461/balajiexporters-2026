@extends('layouts.front')
@section('social')
    <title>Orders | {{ env('APP_NAME') }}</title>
    <!-- For Social Media & SEO -->
    <meta property="og:title" content="Orders | {{ env('APP_NAME') }}">
    <meta name="description" content="">
    <meta property="og:description" content="">
    <meta name="keywords" content="">
    <meta property="og:image" content="{{ asset('img/' . env('APP_LOGO_URL')) }}">
    <meta property="og:url" content="{{ url()->full() }}">
    <link rel="canonical" href="{{ url()->full() }}" />
    <meta name="twitter:card" content="summary_large_image">
    <!-- For Social Media & SEO -->
@endsection
@section('content')
    <section class="section pt-8">
        <div class="container container-small">
            <div class="row">
                <div class="col-lg-8 pe-lg-5">
                    <h1 class="text-dark h2 mb-3" data-aos="fade-up" data-aos-delay="200">My Orders</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('account') }}">My Account</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Orders</li>
                        </ol>
                    </nav>
                    @if (count($orders) == 0)
                        <div class="no-order my-5" data-aos="fade-up" data-aos-delay="200">
                            <h4 class="text-dark"><i class="ri-file-text-line"></i> No Orders to Show</h4>
                        </div>
                    @endif
                    <div class="order-list" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($orders as $order)
                            <div class="card mb-3 card-hover-primary">
                                <a href="{{ route('viewMyOrder', $order->id) }}"
                                    class="card-body d-flex justify-content-between">
                                    <div class="content">
                                        <h6 class="body-font">Order no# {{ $order->id }}</h6>
                                        <p class="mb-0">Order-date:
                                            {{ \Carbon\Carbon::parse($order->created_at)->format('d F Y') }} <br>
                                            Order Value: Rs.{{ $order->currency }}
                                            {{ number_format($order->final_amt, 2) }}</p>
                                    </div>
                                    <div class="status">
                                        @if ($order->last_status == 'Cancelled')
                                            <span class="badge text-bg-danger">Cancelled</span>
                                        @elseif($order->last_status == 'Reviewing')
                                            <span class="badge text-bg-warning">Review</span>
                                        @elseif($order->last_status == 'Complete')
                                            <span class="badge text-bg-success">Planted</span>
                                        @elseif($order->last_status == 'Shipped')
                                            <span class="badge text-bg-info">Shipped</span>
                                        @else
                                            <span class="badge text-bg-warning">To be Planted</span>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                    <div class="my-4">
                      {{ $orders->links('vendor.pagination.bootstrap-4') }}
                  </div>
                    <div class="my-4">
                        <a href="#" class="link" data-aos="fade-up" data-aos-delay="200">Show more</a>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="widget sticky-item">
                        <div class="card" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body p-4">
                                <i class="ri-error-warning-line text-primary fs-2"></i>
                                <h5 class="card-title body-font text-dark">Why isn’t my info shown here?</h5>
                                <p class="card-text">We’re hiding some account details to protect your identity.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
