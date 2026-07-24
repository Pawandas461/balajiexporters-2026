@extends('layouts.front')
@section('social')
    <title>Order Details for {{ $order->id }} | {{ env('APP_NAME') }}</title>
    <!-- For Social Media & SEO -->
    <meta property="og:title" content="Order Details for {{ $order->id }} | {{ env('APP_NAME') }}">
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
    <section class="section">
        <div class="container container-small">
            <div class="row">
                <div class="col-12 col-lg-8 pe-lg-4">
                    <h1 class="title h2 mb-3">Order no {{ '#' . $order->id }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('account') }}">My Account</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order details</li>
                        </ol>
                    </nav>
                    <div class="d-flex justify-content-between">
                        <p class="text-sm"> Order Date: {{ \Carbon\Carbon::parse($order->created_at)->format('d F Y') }}
                        </p>
                        <div>
                            @if ($order->last_status == 'Cancelled')
                                <span class="badge text-bg-danger"> Cancelled </span>
                            @elseif($order->last_status == 'Reviewing')
                                <span class="badge text-bg-danger"> Review </span>
                            @elseif($order->last_status == 'Complete')
                                <span class="badge text-bg-success"> Planted </span>
                            @elseif($order->last_status == 'Shipped')
                                <span class="badge text-bg-info"> Shipped </span>
                            @else
                                <span class="badge text-bg-warning"> To be Planted </span>
                            @endif
                        </div>
                    </div>
                    @if ($order->last_status == 'Shipped')
                        <a href="{{ $order->tracking_url }}" class="link"><i class="ri-truck-line"></i> Track Order</a>
                    @endif
                    <div class="cart-products mt-5">
                        @foreach ($order->orderedProducts as $p)
                            <div class="cart-pro-list">
                                <div class="cp-img">
                                    <a href="{{ $p->url }}"><img src="{{ $p->img }}"
                                            class="img-responsive pro-img" alt=""></a>
                                </div>
                                <div class="cp-name">
                                    {{-- <a href="#" class="pro-name">{{$p->name}}</a>
                <div class="pro-size">Size:  {{$p->size}}</div>
                <div class="pro-count">Box Of (Pieces) : {{$p->piece}}</div> --}}
                                    <div class="pro-count">Quantity : {{ $p->qty }}</div>
                                    <div class="price">{{ $p->currency }} {{ $p->total }}</div>
                                </div>
                            </div>
                            <p class="order-notes"><strong>Order notes:</strong> {!! $order->order_note !!}</p>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body p-4">
                                    <p><strong>Customer Address</strong></p>
                                    <p class="mb-0">
                                        <strong>{{ $order->name }}</strong> ({{ $order->address_type }})<br>
                                        @if (!is_null($order->company))
                                            {{ $order->company }}
                                            {{ !is_null($order->gstin) ? ' GSTIN: ' . $order->gstin : null }}<br />
                                        @endif
                                        {{ $order->house_no }},<br>
                                        {{ $order->area }},<br>
                                        {{ $order->city }}, {{ $order->region }}<br />
                                        {{ $order->country }} - {{ $order->pin }} <br />
                                        <span class="text-sm">Ph: {{ $order->phone }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary sticky-item">
                        <h4>Cart Summary</h4>

                        <div class="price-breakup text-sm">
                            <div>Total Items</div>
                            <div>{{ $order->total_qty }}</div>
                        </div>
                        <div class="price-breakup">
                            <div>Order Value</div>
                            <div>{{ $order->currency }} {{ number_format($order->subtotal1, 2) }}</div>
                        </div>

                        <div class="price-breakup">
                            <div>Coupon Discount</div>
                            <div>- {{ $order->currency }} {{ number_format($order->coupon_discount, 2) }}</div>
                        </div>
                        <div class="price-breakup total mb-1">
                            <div>Sub Total</div>
                            <div>{{ $order->currency }} {{ number_format($order->subtotal3, 2) }}</div>
                        </div>


                        <div class="price-breakup total">
                            <div>Total </div>
                            <div>{{ $order->currency }} {{ number_format($order->final_amt, 2) }}</div>
                        </div>
                        @if ($order->last_status == 'Complete')
                            @if (auth()->user()->name != null)
                                <div class="d-grid gap-2 ">
                                    <a href="{{ route('downloadMyInvoice', $order->id) }}" class="btn btn-light">Download
                                        Certificate</a>
                                </div>
                                @else
                                <div class="d-grid gap-2 ">
                                  <a href="{{route('profileEdit')}}" class="btn btn-light">Please Update Your Name In Your Profile To Download the certificate</a>
                              </div>
                            @endif
                        @else
                            <div class="d-grid gap-2 ">
                                The Tree is not planted yet, so the certificate is not available.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
