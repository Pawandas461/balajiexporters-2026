@extends('layouts.front')
@section('social')
<title>Delivery Addresses  | {{env('APP_NAME')}}</title>
<!-- For Social Media & SEO -->
<meta property="og:title" content="Delivery Addresses  | {{env('APP_NAME')}}" >
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
    <div class="container container-small">
      <div class="row">
        <div class="col-lg-8 pe-lg-5">
          <h1 class="text-dark h2 mb-3">Delivery Address</h1>
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('account')}}">My Account</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Delivery Address</li>
              </ol>
          </nav>
          <div class="address-choose">
            @foreach($addresses as $adr)
              <div class="address-list d-flex justify-content-between ">
                <div>
                  <div class="address">
                    <strong>{{$adr->name}}</strong> <span class="add-type">({{$adr->address_type}})</span><br>
                    @if(!is_null($adr->company)) {{$adr->company}} {{(!is_null($adr->gst_no))? ' GSTIN: '.$adr->gst_no : null}}<br/> @endif
                    {{$adr->addr_line1}}, {{$adr->apartment_no}}<br>
                    {{$adr->addr_line2}}, {{(!is_null($adr->landmark))? 'Landmark: '.$adr->landmark : null}}<br>
                    {{$adr->city}}, {{$adr->state}}<br/>
                    {{$adr->country}} - {{$adr->pin}} <br/>
                    <span class="text-sm">Ph: {{$adr->phone}}</span><br/>
                    <a href="{{ route('deleteAddress', $adr->id) }}" onclick="event.preventDefault();  if(confirm('Are you sure to delete this address ?') == true)   document.getElementById('deleteAddress{{$adr->id}}').submit();" class="text-sm" ><i class="ri-delete-bin-fill"></i> Delete</a>
                  </div>
                </div>
                <div class="form-switch">
                  <a href="{{route('getEditDeliveryAddress', ['id' => $adr->id])}}" class="text-sm"><i class="ri-pencil-fill"></i> Edit</a>
                  <form id="deleteAddress{{$adr->id}}" action="{{ route('deleteAddress', $adr->id) }}" method="POST" style="display: none;">
                  @csrf
                  </form>
                </div>
              </div>
            @endforeach
            <div class="add-address">
              <a href="{{route('getDeliveryAddress')}}" class="btn btn-light"><i class="ri-add-fill"></i> Add Address</a>
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