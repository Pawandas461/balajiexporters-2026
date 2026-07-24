@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="page-header-content d-lg-flex container">
        <div class="d-flex">
            <h4 class="page-title mb-0"> Customers - <span class="fw-normal">All Customers</span> </h4>
            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse"> <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i> </a>
        </div>
    </div>
</div>
<div class="content container pt-0">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h6 class="mb-0"><i class="ph ph-sliders me-1"></i> Filters</h6>
            <div class="d-inline-flex ms-auto">
                <a class="text-body" data-card-action="collapse"> <i class="ph-caret-down"></i> </a>
            </div>
        </div>
        <div class="collapse">
            <div class="card-body">
                <form action="{{route('customers')}}" method="GET">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Name:</label>
                            <input type="text" name="name" value="{{request('name')}}" class="form-control">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Email:</label>
                            <input type="text" name="email" value="{{request('email')}}" class="form-control">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Phone:</label>
                            <input type="text" name="phone" value="{{request('phone')}}" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Active:</label>
                            <select name="active" class="form-select" onchange="this.form.submit()">
                                <option value="">Select</option>
                                <option value="active" @if(request()->active == 'active') selected @endif >Active</option>
                                <option value="inactive" @if(request()->active == 'inactive') selected @endif >Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-secondary me-2">Filter <i class="ph ph-arrow-right ms-1"></i></button> 
                        <a href="{{route('customers')}}" class="btn btn-light"><i class="ph ph-spinner me-1"></i> Reset</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card">
        <table class="table table-striped text-nowrap table-customers">
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Email</th>
                    <th>Orders history</th>
                    <th>Value</th>
                    <th>Wishlist</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $cat)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="flex-fill">
                                <a href="user_pages_profile_tabbed.html" class="fw-semibold">{{$cat->name}}</a>
                            </div>
                        </div>
                    </td>
                    <td>{{$cat->email}}</td>
                    <td>
                        <div>
                            <i class="ph-clock fs-base lh-base align-top text-danger me-1"></i>
                            Pending:
                            <a href="{{route('getPendingOrders')}}">{{$cat->pending_orders_count}} orders</a>
                        </div>

                        <div>
                            <i class="ph-check-circle fs-base lh-base align-top text-success me-1"></i>
                            Processed:
                            <a href="{{route('getOrders')}}">{{$cat->orders_count}} orders</a>
                        </div>
                    </td>
                    <td>
                        <h6 class="mb-0">INR {{$cat->total_spent}}</h6>
                    </td>
                    <td>@if($cat->wishlist_products_count) <a href="{{route('wishlists.index',['customer' => $cat->id])}}">View Wishlisted Items</a> @endif </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-file-pdf me-2"></i>
                                    Invoices
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-truck me-2"></i>
                                    Shipping details
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-coins me-2"></i>
                                    Billing details
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-warning-circle me-2"></i>
                                    Report problem
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$data->appends(request()->all())->links('vendor.pagination.bootstrap-5')}}
</div>
@endsection