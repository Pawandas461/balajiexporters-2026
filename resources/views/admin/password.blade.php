@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="page-header-content d-lg-flex container">
        <div class="d-flex">
            <h4 class="page-title mb-0"> Change Password </h4>
            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>
        <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
            <div class="hstack gap-3 mb-3 mb-lg-0">
                <a href="{{route('dashboard')}}" class="btn btn-light">
                    <i class="ph-arrow-left me-2"></i>
                    Back to Dashboard
                </a>
            </div>
        </div>
    </div>
</div>

<div class="content container pt-0">
    <div class="row">
        <div class="col-md-8">
            <div class="card border">
                <div class="card-body">
                    @if (session('status') === 'password-updated')
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Saved!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <Form method="POST" action="{{route('password.update')}}">
                        <table style="width: 100%;" class="publish-date-table">
                            <tbody>
                                <tr>
                                    <td>Current Password</td>
                                    <td></td>
                                    <td>
                                        <input name="current_password" type="password" class="form-control">
                                        @error('current_password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>New Password</td>
                                    <td></td>
                                    <td>
                                        <input name="password" type="password" class="form-control">
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Confirm Password</td>
                                    <td></td>
                                    <td>
                                        <input name="password_confirmation" type="password" class="form-control" >
                                        @error('password_confirmation')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @csrf
                        @method('put')
                        <div class="mt-4 text-end">
                            <button type="submit" class="btn btn-success">Save Information</button>
                        </div>
                    </Form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection