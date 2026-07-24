@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="page-header-content d-lg-flex container">
        <div class="d-flex">
            <h4 class="page-title mb-0">Dashboard</h4>
        </div>
    </div>
</div>
<div class="content container pt-0">
    <div class="row">
        <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white text-center">
                <div class="card-body">
                    <h1 class="mb-0">{{ $adminCount }}</h1>
                    <div>Admins / Superadmins</div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-success text-white text-center">
                <div class="card-body">
                    <h1 class="mb-0">{{ $enquiryCount }}</h1>
                    <div>Total Enquiries</div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-warning text-white text-center">
                <div class="card-body">
                    <h1 class="mb-0">{{ $pageEnquiryCount }}</h1>
                    <div>Enquiries from Pages</div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-info text-white text-center">
                <div class="card-body">
                    <h1 class="mb-0">{{ $whatsappEnquiryCount }}</h1>
                    <div>Enquiries in Whatsapp</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card border">
                <div class="card-header border-bottom">
                    <h5 class="mb-0">Recent Activity Logs</h5>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Activity</th>
                                <th>IP Address</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentLogs as $log)
                            <tr>
                                <td>{{ $log->user_name }}</td>
                                <td>{{ $log->activity }}</td>
                                <td>{{ $log->ip_address }}</td>
                                <td>{{ $log->created_at->diffForHumans() }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No recent activity</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection