file_path = r"c:\Freelance\Balaji_Exports_Full\resources\views\enquiries\show.blade.php"

new_content = """@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="page-header-content d-lg-flex container">
        <div class="d-flex">
            <h4 class="page-title mb-0"> Enquiries - <span class="fw-normal">{{\Carbon\Carbon::parse($data->created_at)->format('d F Y h:i:m a')}}</span> </h4>
            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse"> <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i> </a>
        </div>
    </div>
</div>
<div class="content">
    <div class="d-flex align-items-stretch align-items-lg-start flex-column flex-lg-row">
        <div class="flex-1 order-2 order-lg-1">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="mb-3">
                            <p><strong>Name:</strong> {{$data->name}}</p>
                            <p><strong>Email:</strong> {{$data->email}}</p>
                            <p><strong>Phone:</strong> <a href="tel:{{$data->phone}}">{{$data->phone}}</a></p>
                            <p><strong>Country:</strong> {{$data->country}}</p>
                            <p><strong>Business Type:</strong> {{$data->business_type}}</p>
                            <p><strong>Product Categories:</strong> {{ is_array($data->product_categories) ? implode(', ', $data->product_categories) : $data->product_categories }}</p>
                            <h6 class="mt-4">Message</h6>
                            <p>{{$data->message}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none order-1 order-lg-2 ms-lg-3 mb-3">
            <div class="sidebar-content">
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Actions</span>
                    </div>

                    <div class="sidebar-section-body">
                        @if($data->is_contacted == 1)
                            <h6>Calling done is marked on {{\Carbon\Carbon::parse($data->updated_at)->format('d F Y h:i:m a')}}</h6> 
                        @endif
                        <div class="d-grid gap-2">
                            <a href="tel:{{$data->phone}}" class="btn btn-primary">Contact now</a>
                            <a href="{{route('enquiries.index')}}" class="btn btn-light">Back to Listing</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
"""

with open(file_path, "w", encoding="utf-8") as f:
    f.write(new_content)
    
print("Updated show.blade.php successfully.")
