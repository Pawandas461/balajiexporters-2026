@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="page-header-content d-lg-flex container">
        <div class="d-flex">
            <h4 class="page-title mb-0"> Attributes - <span class="fw-normal">All Attributes</span> </h4>
            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse"> <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i> </a>
        </div>
        <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
            <div class="hstack gap-3 mb-3 mb-lg-0">
                <a href="{{route('attributes.create')}}" class="btn btn-primary"> <i class="ph-plus me-2"></i> Add Attribute </a>
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
                <form action="{{route('attributes.index')}}" method="GET">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Title:</label>
                            <input type="text" name="name" value="{{request('name')}}" class="form-control">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Active:</label>
                            <select name="active" class="form-select" onchange="this.form.submit()">
                                <option value="">Select</option>
                                <option value="1" @if(request()->active == '1') selected @endif >Active</option>
                                <option value="0" @if(request()->active == '0') selected @endif >Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Category:</label>
                            <select name="category_id" class="form-select" onchange="this.form.submit()">
                                <option value="">Select</option>
                                @foreach($categories as $c)
                                    <option value="{{$c->id}}" @if(request()->category_id == $c->id) selected @endif >{{$c->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-secondary me-2">Filter <i class="ph ph-arrow-right ms-1"></i></button> 
                        <a href="{{route('attributes.index')}}" class="btn btn-light"><i class="ph ph-spinner me-1"></i> Reset</a>
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
                        <th>Title</th>
                        <th>Active</th>
                        <th>Values</th>
                        <th>Categories</th>
                        <th class="text-end"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $cat)
                        <tr>
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->name}}</td>
                            <td>@if($cat->active) <i class="ph ph-check text-success"></i> @else <i class="ph ph-x text-danger"></i> @endif</td>
                            <td>{{$cat->values}}</td>
                            <td>
                                @foreach ($cat->categories as $c)
                                    <span class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-primary">{{$c->name}}</span>
                                @endforeach
                            </td>
                            <td class="text-end">
                                <div class="d-inline-flex">
                                    <a href="{{route('attributes.edit',$cat->id)}}" class="text-body"> <i class="ph ph-pencil"></i> </a>
                                </div>
                                <div class="d-inline-flex">
                                    <form action="{{ route('attributes.destroy', $cat->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this attribute?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link text-body p-0">
                                            <i class="ph ph-trash"></i>
                                        </button>
                                    </form>
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