@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="page-header-content d-lg-flex container">
        <div class="d-flex">
            <h4 class="page-title mb-0"> Attributes<span class="fw-normal">@if($data)  - {{$data->name}} @else Add New @endif</span> </h4>
            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse"> <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i> </a>
        </div>
        <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
            <div class="hstack gap-3 mb-3 mb-lg-0">
                <a href="{{route('attributes.index')}}" class="btn btn-light"> <i class="ph-arrow-left me-2"></i> Back to Attributes </a>
            </div>
        </div>
    </div>
</div>
<div class="content container pt-0">
    <div class="row">
        <div class="col-md-10">
            <div class="card border">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form method="POST"  action="{{ ($data) ? route('attributes.update', $data->id) : route('attributes.store') }}"  id="uf"  enctype="multipart/form-data">
                        <table style="width: 100%;" class="publish-date-table">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td></td>
                                    <td>
                                        <input type="text" name="name" @if($data) value="{{$data->name}}" @else value="{{old('name')}}"  @endif class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Slug</td>
                                    <td></td>
                                    <td>
                                        <input type="text" name="slug" @if($data) value="{{$data->slug}}" @else value="{{old('slug')}}"  @endif class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Active</td>
                                    <td></td>
                                    <td>
                                        <select name="active" class="form-select" required>
                                            <option value="">Select</option>
                                            <option value="1" {{ old('active', $data->active ?? '') == '1' ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('active', $data->active ?? '') == '0' ? 'selected' : '' }}>Draft</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Values</td>
                                    <td></td>
                                    <td>
                                        <input type="text" name="values" data-role="tagsinput" class="form-control tagsinput-typeahead form-control"  value="{{ old('values', $data->values ?? '') }}" required placeholder="Type and hit Enter">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Categories</td>
                                    <td></td>
                                    <td>
                                        <select name="categories[]" class="form-control form-control-select2" multiple="multiple">
                                            @foreach ($categories as $c)
                                                <option value="{{$c->id}}" @if(old('categories')) {{ in_array($c->id, old('categories')) ? 'selected' : '' }} @elseif($data && $data->categories()->where('categories.id', $c->id)->exists()) selected @endif >{{$c->name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="mt-4 text-end">
                            <button type="submit" class="btn btn-success">Save Information</button>
                        </div>
                        @csrf
                        @if($data)
                            @method('PUT')
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    $("#uf").validate();
</script>
@endsection