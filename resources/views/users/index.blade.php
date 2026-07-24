@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="page-header-content d-lg-flex container">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Users - <span class="fw-normal">All Users</span>
            </h4>

            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>

        <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
            <div class="hstack gap-3 mb-3 mb-lg-0">
                <a href="{{route('users.create')}}" class="btn btn-primary">
                    <i class="ph-plus me-2"></i>
                    Add User
                </a>
            </div>
        </div>
    </div>
</div>
<div class="content container pt-0">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h6 class="mb-0"><i class="ph ph-sliders me-1"></i> Filters</h6>
            <div class="d-inline-flex ms-auto">
                <a class="text-body" data-card-action="collapse">
                    <i class="ph-caret-down"></i>
                </a>
            </div>
        </div>

        <div class="collapse">
            <div class="card-body">
                <form action="{{route('users.index')}}" method="GET">
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
                            <label class="form-label">Role:</label>
                            <select name="role" class="form-select" onchange="this.form.submit()">
                                <option value="">Select</option>
                                <option value="Superadmin" @if(request()->role == 'Superadmin') selected @endif >Superadmin</option>
                                <option value="Admin" @if(request()->role == 'Admin') selected @endif >Admin</option>
                            </select>
                        </div>
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
                        <a href="{{route('users.index')}}" class="btn btn-light"><i class="ph ph-spinner me-1"></i> Reset</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card border">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Active</th>
                        <th class="text-end"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->email}}</td>
                        <td>{{$cat->phone}}</td>
                        <td><span class="badge pill-rounded bg-pink">{{$cat->role}}</span></td>
                        <td>@if(is_null($cat->email_verified_at)) <i class="ph ph-x text-danger"></i> @else <i class="ph ph-check text-success"></i> @endif </td>
                        <td class="text-end">
                            <div class="d-inline-flex">
                                <a href="{{route('users.edit',$cat->id)}}" class="text-body"> <i class="ph ph-pencil"></i> </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$data->appends(request()->all())->links('vendor.pagination.bootstrap-5')}}
</div>
@endsection