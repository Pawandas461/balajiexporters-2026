@extends('layouts.admin')
@section('content')
    <div class="page-header bg-white border-bottom shadow-sm mb-2">
        <div class="page-header-content d-lg-flex container py-3">
            <div class="d-flex align-items-center w-100">
                <h4 class="page-title mb-0 fw-semibold text-dark"> 
                    Enquiry Details 
                    <span class="fw-normal text-muted fs-sm ms-2">
                        Received on: {{ \Carbon\Carbon::parse($data->created_at)->format('d M Y, h:i A') }}
                    </span>
                </h4>
                <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse"> 
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i> 
                </a>
            </div>
        </div>
    </div>

    <div class="content container">
        <div class="row g-4">
            <!-- Left Side: Detailed Information & Messages -->
            <div class="col-lg-8">
                <!-- Primary Information Card -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-light d-flex align-items-center py-3">
                        <h6 class="mb-0 fw-bold text-secondary">Contact Profile</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="text-muted fs-xs fw-semibold text-uppercase">Full Name</label>
                                <p class="fw-semibold text-dark fs-base mb-0">{{ $data->name ?? 'N/A' }}</p>
                            </div>
                            <div class="col-sm-6">
                                <label class="text-muted fs-xs fw-semibold text-uppercase">Company Name</label>
                                <p class="text-dark mb-0">{{ $data->company ?? 'N/A' }}</p>
                            </div>
                            <div class="col-sm-6">
                                <label class="text-muted fs-xs fw-semibold text-uppercase">Primary Email</label>
                                <p class="mb-0"><a href="mailto:{{ $data->email }}" class="text-primary fw-medium">{{ $data->email }}</a></p>
                            </div>
                            <div class="col-sm-6">
                                <label class="text-muted fs-xs fw-semibold text-uppercase">Secondary Email</label>
                                <p class="text-dark mb-0">{{ $data->email1 ?? 'N/A' }}</p>
                            </div>
                            <div class="col-sm-6">
                                <label class="text-muted fs-xs fw-semibold text-uppercase">Primary Phone</label>
                                <p class="mb-0"><a href="tel:{{ $data->phone }}" class="text-primary fw-medium">{{ $data->phone }}</a></p>
                            </div>
                            <div class="col-sm-6">
                                <label class="text-muted fs-xs fw-semibold text-uppercase">Secondary Phone</label>
                                <p class="text-dark mb-0">{{ $data->phone1 ?? 'N/A' }}</p>
                            </div>
                            <div class="col-sm-6">
                                <label class="text-muted fs-xs fw-semibold text-uppercase">Country</label>
                                <p class="text-dark mb-0">{{ $data->country ?? 'N/A' }}</p>
                            </div>
                            <div class="col-sm-6">
                                <label class="text-muted fs-xs fw-semibold text-uppercase">Location / City</label>
                                <p class="text-dark mb-0">{{ $data->location ?? 'N/A' }}</p>
                            </div>
                        </div>

                        <hr class="my-4 text-muted opacity-25">

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="text-muted fs-xs fw-semibold text-uppercase">Business Type</label>
                                <p class="text-dark mb-0">{{ $data->business_type ?? 'N/A' }}</p>
                            </div>
                            <div class="col-sm-6">
                                <label class="text-muted fs-xs fw-semibold text-uppercase">Lead Source</label>
                                <p class="text-dark mb-0"><span class="badge bg-secondary py-1.5 px-2">{{ $data->source ?? 'N/A' }}</span></p>
                            </div>
                            <div class="col-sm-6">
                                <label class="text-muted fs-xs fw-semibold text-uppercase">Order Quantity</label>
                                <p class="text-dark mb-0">{{ $data->order_quantity ?? 'N/A' }}</p>
                            </div>
                            <div class="col-10">
                                <label class="text-muted fs-xs fw-semibold text-uppercase d-block mb-1">Product Categories</label>
                                @if(is_array($data->product_categories) && count($data->product_categories) > 0)
                                    <div class="d-flex flex-wrap gap-1.5">
                                        @foreach($data->product_categories as $category)
                                            <span class="badge bg-info-subtle text-info border border-info border-opacity-25 rounded-pill px-2.5 py-1.5">{{ $category }}</span>
                                        @endforeach
                                    </div>
                                @elseif(!is_array($data->product_categories) && !empty($data->product_categories))
                                    <span class="badge bg-info-subtle text-info border border-info border-opacity-25 rounded-pill px-2.5 py-1.5">{{ $data->product_categories }}</span>
                                @else
                                    <p class="text-muted mb-0">No categories specified</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inquiry Message Card -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-light py-3">
                        <h6 class="mb-0 fw-bold text-secondary">Inquiry Message</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="text-muted fs-xs fw-semibold text-uppercase mb-1">Subject</label>
                            <h5 class="text-dark fw-semibold">{{ $data->subject ?? 'No Subject Provided' }}</h5>
                        </div>
                        <div>
                            <label class="text-muted fs-xs fw-semibold text-uppercase mb-1">Message Body</label>
                            <div class="p-3 bg-light rounded text-secondary border-start border-primary border-3 lh-base">
                                {{ $data->message }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Follow-up Form & Actions Sidebar -->
            <div class="col-lg-4">
                <!-- NEW: Follow Up Management Card -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-light py-3">
                        <h6 class="mb-0 fw-bold text-secondary">Follow-Up Log</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('enquiries.update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="follow_up_msg" class="form-label text-muted fs-xs fw-semibold text-uppercase">Follow-Up Notes</label>
                                <textarea name="follow_up_msg" id="follow_up_msg" rows="4" class="form-control" placeholder="Type internal update or customer follow-up notes here...">{{ old('follow_up_msg', $data->follow_up_msg) }}</textarea>
                            </div>
                            
                            <!-- Hidden input ensures parameter flag is updated if changed inside controller logic -->
                            <input type="hidden" name="is_contacted" value="1">
                            
                            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
                                <i class="ph-floppy-disk me-2"></i>Save Follow-Up
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Core Operational Actions Card -->
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-light py-3">
                        <h6 class="mb-0 fw-bold text-secondary">Status & Tools</h6>
                    </div>
                    <div class="card-body">
                        @if ($data->is_contacted == 1)
                            <div class="alert alert-success border-0 d-flex align-items-start p-2.5 mb-3">
                                <i class="ph-check-circle fs-4 me-2 mt-0.5 text-success"></i>
                                <div>
                                    <span class="fw-semibold d-block">Contact Established</span>
                                    <small class="text-muted">
                                        Logged on: {{ $data->last_contacted_at ? \Carbon\Carbon::parse($data->last_contacted_at)->format('d M Y, h:i A') : \Carbon\Carbon::parse($data->updated_at)->format('d M Y, h:i A') }}
                                    </small>
                                </div>
                            </div>
                        @else
                            <div class="alert alert-warning border-0 d-flex align-items-start p-2.5 mb-3">
                                <i class="ph-clock fs-4 me-2 mt-0.5 text-warning"></i>
                                <div>
                                    <span class="fw-semibold d-block">Pending Action</span>
                                    <small class="text-muted">Awaiting initial outreach log.</small>
                                </div>
                            </div>
                        @endif

                        <div class="d-grid gap-2">
                            @if($data->is_contacted != 1)
                                <form action="{{ route('enquiries.update', $data->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="is_contacted" value="1">
                                    <button type="submit" class="btn btn-outline-primary w-100">
                                        <i class="ph-phone-call me-2"></i>Mark Contacted Now
                                    </button>
                                </form>
                            @endif

                            <form action="{{ route('enquiries.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to permanently delete this enquiry?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-light text-danger w-100">
                                    <i class="ph-trash me-2"></i>Delete Record
                                </button>
                            </form>
                            
                            <hr class="my-2 text-muted opacity-25">
                            <a href="{{ route('enquiries.index') }}" class="btn btn-light w-100">
                                <i class="ph-arrow-left me-2"></i>Back to Overview
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
