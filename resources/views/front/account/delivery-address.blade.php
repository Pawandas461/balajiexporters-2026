@extends('layouts.front')
@section('social')
<title>Delivery Address Add/Edit | {{env('APP_NAME')}}</title>
<!-- For Social Media & SEO -->
<meta property="og:title" content="Delivery Address Add/Edit | {{env('APP_NAME')}}" >
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
                    <h1 class="text-dark h2 mb-3"> @if($adr) Edit @else Add @endif Address</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('account')}}">My Account</a></li>
                            <li class="breadcrumb-item"><a href="{{route('getDeliveryAddresses')}}">Addresses</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> @if($adr) Edit @else Add @endif Address</li>
                        </ol>
                    </nav>
                    <form method="POST" @if($adr) action="{{route('postEditDeliveryAddress', $adr->id)}}" @else action="{{route('postDeliveryAddress')}}" @endif id="af" class="widget">
                        <div class="mb-4">
                            <label>Address Type <span>*</span></label>
                            <div class="add-radio-outer">
                                <div class="radio">
                                <label>
                                    <input type="radio" name="address_type" value="Office" @if($adr) @if($adr->address_type == 'Office') checked @endif @endif ><span>Office</span>
                                </label>
                                </div>
                                <div class="radio">
                                <label>
                                    <input type="radio" name="address_type" value="Home" @if($adr) @if($adr->address_type == 'Home') checked @endif @endif >
                                    <span>Home</span>
                                </div>
                                
                                <div class="radio">
                                <label>
                                    <input type="radio" name="address_type" value="Other" @if($adr) @if($adr->address_type == 'Other') checked @endif @endif ><span>Other</span>
                                </label>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="fullname">Name <span>*</span></label>
                                    <input type="text" class="form-control" maxlength="100" name="name" placeholder="Full name" id="name" required="" @if($adr) value="{{$adr->name}}" @endif >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="fullname">Phone <span>*</span></label>
                                    <input type="number" class="form-control d-block" placeholder="Phone" maxlength="100" name="phone" @if($adr) value="{{$adr->phone}}" @endif >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="mb-4">
                                <label>Address Line 1 <span>*</span></label>
                                <input type="text" class="form-control" maxlength="100" name="addr_line1" placeholder="Address Line 1" id="addr_line1" required="" @if($adr) value="{{$adr->addr_line1}}" @endif >
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="mb-4">
                                <label>Address Line 2 </label>
                                <input type="text" class="form-control" maxlength="100" name="addr_line2" placeholder="Address Line 2" id="addr_line2" @if($adr) value="{{$adr->addr_line2}}" @endif >
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label>Landmark  </label>
                                    <input type="text" class="form-control" maxlength="256" name="landmark" placeholder="Landmark" id="landmark" @if($adr) value="{{$adr->landmark}}" @endif >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label>City <span>*</span> </label>
                                    <input type="text" class="form-control" maxlength="100" name="city" placeholder="City" id="city" required="" @if($adr) value="{{$adr->city}}" @endif >
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label>State  <span>*</span> </label>
                                    <select name="state" class="form-select" required>
                                        <option value="">Select</option>
                                      @foreach ($states as $s)
                                          <option value="{{$s}}" @if($adr) @if($adr->state == $s) selected @endif @endif >{{$s}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label>Post Code/ Zip Code <span>*</span></label>
                                    <input type="text" class="form-control" maxlength="10" name="pin" placeholder="Pin Code *" id="pin" required="" @if($adr) value="{{$adr->pin}}" @endif >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label>Company name </label>
                                    <input type="text" class="form-control" maxlength="255" name="company" placeholder="Company" id="company" @if($adr) value="{{$adr->company}}" @endif >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label>GSTIN/ Tax Code </label>
                                    <input type="text" class="form-control" maxlength="15" name="gst_no" placeholder="Gst Number(Optional)" id="gst_no" @if($adr) value="{{$adr->gst_no}}" @endif >
                                    <p>**If applicable</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Save Details</button>
                        </div>
                        @csrf
                        @method('patch')
                    </form>

                </div>

                <div class="col-lg-4">
                    <div class="widget sticky-item">
                        <div class="card">
                            <div class="card-body p-4">
                                <i class="ph-duotone ph-file-text fs-2 text-primary"></i>
                                <h5 class="card-title body-font mt-2">Enter details for Invoicing</h5>
                                <p class="card-text">We’re hiding some account details to protect your identity.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection