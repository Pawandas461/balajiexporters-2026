@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <div class="page-header-content d-lg-flex container">
            <div class="d-flex">
                <h4 class="page-title mb-0"> Activity Logs - <span class="fw-normal">All Logs</span> </h4>
                <a href="#page_header"
                    class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                    data-bs-toggle="collapse"> <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i> </a>
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
                    <form action="{{ route('activityLogs.index') }}" method="GET">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Start Date:</label>
                                <input type="date" name="start" value="{{ request('start') }}" class="form-select">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">End Date:</label>
                                <input type="date" name="end" value="{{ request('end') }}" class="form-select">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary me-2">Filter <i
                                    class="ph ph-arrow-right ms-1"></i></button>
                            <a href="{{ route('activityLogs.index') }}" class="btn btn-light"><i
                                    class="ph ph-spinner me-1"></i> Reset</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="card border">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Date / Time</th>
                            <th>User (ID)</th>
                            <th>Action</th>
                            <th>Method & URL</th>
                            <th>IP Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($logs as $log)
                            <tr>
                                <td>
                                    {{ \Carbon\Carbon::parse($log->created_at)->format('d M Y, h:i A') }}
                                </td>
                                <td>
                                    <b>{{ $log->user_name }}</b> ({{ $log->user_id }})<br>
                                    <small class="text-muted">{{ $log->user_email }}</small>
                                </td>
                                <td>{{ $log->activity }}</td>
                                <td>
                                    <span class="badge bg-secondary">{{ $log->method }}</span><br>
                                    <small class="text-muted text-wrap" style="max-width: 300px; display: inline-block;">{{ $log->url }}</small>
                                </td>
                                <td>{{ $log->ip_address }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-3">No activity logs found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        {{ $logs->appends(request()->all())->links('vendor.pagination.bootstrap-5') }}
    </div>
@endsection
