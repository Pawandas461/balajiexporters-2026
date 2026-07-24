@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="page-header-content d-lg-flex container">
        <div class="d-flex">
            <h4 class="page-title mb-0"> Logs - <span class="fw-normal">All Logs</span> </h4>
            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse"> <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i> </a>
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
                <form action="{{route('logs')}}" method="GET">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label class="form-label">User:</label>
                            <select name="user" class="form-select" onchange="this.form.submit()">
                                <option value="">Select</option>
                                @foreach($users as $c)
                                    <option value="{{$c->id}}" @if(request()->user == $c->id) selected @endif >{{$c->fname}}{{$c->lname}}/ {{$c->email}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-secondary me-2">Filter <i class="ph ph-arrow-right ms-1"></i></button> 
                        <a href="{{route('logs')}}" class="btn btn-light"><i class="ph ph-spinner me-1"></i> Reset</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card border">
        <div class="table-responsive">
            <form method="POST" action="{{route('deleteLog')}}">
                @csrf
                @method('DELETE')
            <table class="table">
                <thead>
					<tr style="display: none;" id="downldInvoice">
						<th colspan="8">
							<select class="form-control" name="bulk_option" onchange="event.preventDefault();  if(confirm('Are you sure to take this bulk action ?') == true) {this.form.submit();}" >
								<option value="">Bulk Option</option>
								<option value="cancel">Delete Logs</option>
							</select>
						</th>
					</tr>
                    <tr>
						<th>
							<input type="checkbox" name="checkall" onclick="$('input:checkbox').not(this).prop('checked', this.checked);if ($('.order_check').filter(':checked').length < 1){ $('#downldInvoice').hide();}else{ $('#downldInvoice').show();}" >
						</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Activity</th>
                        <th>Url</th>
                        <th>Method</th>
                        <th>IP Address</th>
                        <th>User Agent</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $cat)
                        <tr>
                            <td>
                                <label class="form-check form-check-inline m-0">
                                    <input type="checkbox" name="order_id[]" class="form-check-input order_check" value="{{$cat->id}}" id="order{{$cat->id}}" onclick="checkDownload()" >
                                    <span class="form-check-label">{{$cat->id}}</span>
                                </label>
                            </td>
                            <td>{{$cat->user_name}}</td>
                            <td>{{$cat->user_email}}</td>
                            <td>{{$cat->activity}}</td>
                            <td>{{$cat->url}}</td>
                            <td>{{$cat->method}}</td>
                            <td>{{$cat->ip_address}}</td>
                            <td>{{$cat->user_agent}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
			</form>
        </div>
    </div>
    {{$data->appends(request()->all())->links('vendor.pagination.bootstrap-5')}}
</div>
<script>
	function checkDownload() {
		if ($('.order_check').filter(':checked').length < 1){ $('#downldInvoice').hide();}else{ $('#downldInvoice').show();}
	};
</script>
@endsection