@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="page-header-content d-lg-flex container">
        <div class="d-flex">
            <h4 class="page-title mb-0"> Profile Information </h4>
            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse"> <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i> </a>
        </div>
        <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
            <div class="hstack gap-3 mb-3 mb-lg-0">
                <a href="{{route('dashboard')}}" class="btn btn-light"> <i class="ph-arrow-left me-2"></i> Back to Dashboard </a>
            </div>
        </div>
    </div>
</div>

<div class="content container pt-0">
    <div class="row">
        <div class="col-md-8">
            <div class="card border">
                <div class="card-body">
                    @if (session('status') === 'profile-updated')
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Saved!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <Form method="post" action="{{ route('profile.update') }}" id="uf">
                        @csrf
                        @method('patch')
                        <table style="width: 100%;" class="publish-date-table">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td></td>
                                    <td>
                                        <input name="name" type="text" value="{{old('name', $user->name)}}" required autofocus autocomplete="name" class="form-control">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>GST No.</td>
                                    <td></td>
                                    <td>
                                        <input name="gst_no" type="text" value="{{old('gst_no', $user->gst_no)}}" autocomplete="gst_no" class="form-control">
                                        @error('gst_no')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Company</td>
                                    <td></td>
                                    <td>
                                        <input name="business_name" type="text" value="{{old('business_name', $user->business_name)}}" autocomplete="business_name" class="form-control">
                                        @error('business_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td></td>
                                    <td>
                                        <input name="phone" type="text" value="{{old('phone', $user->phone)}}" required autocomplete="phone" class="form-control">
                                        @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td></td>
                                    <td>
                                        <div class="input-group" id="er6">
                                            <input name="email" type="text" value="{{old('email', $user->email)}}" required autocomplete="email" class="form-control" readonly disabled>
                                            @if(is_null($user->email_verified_at)) <span class="input-group-text"> <i class="ph-x-circle" title="Email Not Verified"></i> </span>
                                            @else <span class="input-group-text"> <i class="ph-check-circle" title="Email Verified"></i> </span> @endif
                                        </div>
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-4 text-end">
                            <button type="submit" class="btn btn-success">Save Information</button>
                        </div>
                    </Form>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    $("#uf").validate({
        rules: {
            @if(!$user) password:{required: true,minlength: 8} @else  password:{minlength: 8} @endif
        }
    });
</script>
@endsection