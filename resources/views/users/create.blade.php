@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="page-header-content d-lg-flex container">
        <div class="d-flex">
            <h4 class="page-title mb-0"> Users - <span class="fw-normal">@if($data) {{$data->name}} @else Add New @endif</span> </h4>
            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse"> <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i> </a>
        </div>
        <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
            <div class="hstack gap-3 mb-3 mb-lg-0">
                <a href="{{route('users.index')}}" class="btn btn-light"> <i class="ph-arrow-left me-2"></i> Back to Users </a>
            </div>
        </div>
    </div>
</div>
<div class="content container pt-0">
    <div class="row">
        {{-- @if($data)
        <div class="col-md-4">
            <div class="card border">
                <div class="card-body">
                    <img src="https://img.magnific.com/free-photo/horizontal-portrait-smiling-happy-young-pleasant-looking-female-wears-denim-shirt-stylish-glasses-with-straight-blonde-hair-expresses-positiveness-poses_176420-13176.jpg?semt=ais_hybrid&w=740&q=80" alt="" class="img-fluid img-thumbnail rounded mx-auto d-block" width="50%">
                </div>
            </div>
        </div>
        @endif --}}
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
                    <form method="POST"  action="{{ ($data) ? route('users.update', $data->id) : route('users.store') }}"  id="uf">
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
                                    <td>Email</td>
                                    <td></td>
                                    <td>
                                        <input type="email" name="email" @if($data) value="{{$data->email}}" disabled @else value="{{old('email')}}" @endif class="form-control" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td></td>
                                    <td>
                                        <input type="text" name="phone" @if($data) value="{{$data->phone}}" @else value="{{old('phone')}}" @endif class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Role</td>
                                    <td></td>
                                    <td>
                                        <select name="role" class="form-control" required>
                                            <option value="">Select</option>
                                            @foreach($roles as $p)
                                            <option value="{{$p}}" @if(strtolower(old('role', !empty($data) && is_object($data) ? $data->role : '')) == strtolower($p)) selected @endif>{{$p}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Allow Login?</td>
                                    <td></td>
                                    <td>
                                        <select name="allow_login" class="form-control" required>
                                        <option value="1" @if($data) @if(!is_null($data->email_verified_at)) selected @endif @else @if(old('allow_login') == "1") selected @endif  @endif >Enabled</option>
                                        <option value="0" @if($data) @if(is_null($data->email_verified_at)) selected @endif @else @if(old('allow_login') == "0") selected @endif @endif >Disabled</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>@if($data) Update @endif Password</td>
                                    <td></td>
                                    <td>
                                        <input type="password" class="form-control" name="password"  >
                                        @if($data)<p><small>* Leave password blank if password is not required to change</small></p>@endif
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
    $("#uf").validate({
        rules: {
            @if(!$data) password:{required: true,minlength: 8} @else  password:{minlength: 8} @endif
        }
    });
</script>
@endsection