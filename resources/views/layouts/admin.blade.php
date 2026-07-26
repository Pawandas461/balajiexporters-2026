<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{env('APP_NAME')}} - Admin</title>
	<link rel="icon" type="image/png" href="{{asset('assets/images/'.env('APP_FAVICON_URL'))}}">
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

	<!-- Global stylesheets -->
	<link href="{{asset('assets/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- plugins -->
    <script src="{{asset('assets/js/vendor/editors/ckeditor/ckeditor_classic.js')}}"></script>
    <script src="{{asset('assets/js/vendor/pickers/datepicker.min.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
	<script src="{{asset('assets/js/vendor/forms/selects/select2.min.js')}}"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css">
	<script src="{{asset('assets/js/vendor/notifications/noty.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/tagsinput.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/typeahead.bundle.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

	<!-- Theme JS files -->
	<script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
	<!-- /theme JS files -->
	<style>
		.error{
			color: red;
		}
		/* ------------------------------------------------------------------------------
		*
		*  # Bootstrap tags input
		*
		*  Styles for tagsinput.js - tags input for Bootstrap
		*
		*  Version: 1.2
		*  Latest update: Mar 10, 2016
		*
		* ---------------------------------------------------------------------------- */
		.bootstrap-tagsinput {
			background-color: #fff;
			border: 1px solid #ddd;
			display: inline-block;
			padding: 0 0 2px 0;
			vertical-align: middle;
			border-radius: 3px;
			width: 100%;
		}
		.bootstrap-tagsinput input {
			border: 0;
			outline: 0;
			background-color: transparent;
			padding: 5px 11px;
			margin-top: 2px;
			margin-left: 2px;
			width: auto !important;
			min-width: 100px;
			font-size: 12px;
			line-height: 1.6666667;
			-webkit-box-shadow: none;
			box-shadow: none;
		}
		.bootstrap-tagsinput input:focus {
			border: none;
			box-shadow: none;
		}
		.bootstrap-tagsinput .twitter-typeahead {
			width: auto;
		}
		.bootstrap-tagsinput .tt-dropdown-menu {
			margin-top: 5px;
			min-width: 200px;
		}
		.bootstrap-tagsinput .tag {
			margin: 2px 0 0 2px;
			border: 0;
			border-radius: 2px;
			padding: 5px 11px;
			padding-right: 30px;
			float: left;
			font-size: 12px;
			line-height: 1.6666667;
			font-weight: 400;
			text-transform: none;
			position: relative;
		}
		.bootstrap-tagsinput .tag:not([class*=bg-]) {
			background-color: #546E7A;
			color: #fff;
		}
		.bootstrap-tagsinput .tag [data-role="remove"] {
			cursor: pointer;
			color: inherit;
			position: absolute;
			top: 50%;
			right: 11px;
			line-height: 1;
			margin-top: -5.5px;
			opacity: 0.7;
			filter: alpha(opacity=70);
		}
		.bootstrap-tagsinput .tag [data-role="remove"]:hover {
			opacity: 1;
			filter: alpha(opacity=100);
		}
		.bootstrap-tagsinput .tag [data-role="remove"]:after {
			content: 'X';
			font-family: Arial, sans-serif;
			display: block;
			font-size: 11px;
			color: #fff;
			font-weight: 800;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}
	</style>
</head>
<body>
	<div class="page-content">
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">
			<div class="sidebar-section bg-black bg-opacity-10 border-bottom border-bottom-white border-opacity-10">
				<div class="sidebar-logo d-flex justify-content-center align-items-center">
					<a href="" class="d-inline-flex align-items-center py-2">
                        <h6 class="m-0 ps-2 text-white sidebar-resize-hide">{{env('APP_NAME')}}</h6>
					</a>
					<div class="sidebar-resize-hide ms-auto">
						<button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
							<i class="ph-arrows-left-right"></i>
						</button>
						<button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
							<i class="ph-x"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="sidebar-content">
				<div class="sidebar-section">
					<ul class="nav nav-sidebar" data-nav-type="accordion">
						<li class="nav-item"> <a href="{{ route('dashboard') }}" class="nav-link"> <i class="ph-chart-line"></i> <span>Dashboard</span> </a> </li>
						@can('isAdminIsSuperadmin')
							
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"> <i class="ph-users"></i> <span>Users</span> </a>

								<ul class="nav-group-sub collapse">
									<li class="nav-item"><a href="{{ route('users.index') }}" class="nav-link">All Users</a></li>
									<li class="nav-item"><a href="{{ route('users.create') }}" class="nav-link">Create New User</a></li>
								</ul>
							</li>
							<li class="nav-item"> <a href="{{ route('enquiries.index') }}" class="nav-link"> <i class="ph-users-four"></i> <span>Enquiries</span> </a> </li>
							<li class="nav-item"> <a href="{{ route('activityLogs.index') }}" class="nav-link"> <i class="ph-list-checks"></i> <span>Logs</span> </a> </li>
						@endcan
					</ul>
				</div>
			</div>
		</div>
		<div class="content-wrapper">
			<div class="navbar navbar-expand-lg navbar-static border-bottom">
				<div class="container-fluid">
					<div class="d-flex d-lg-none">
						<button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded">
							<i class="ph-list"></i>
						</button>
						<div class="d-flex d-lg-none align-self-center ms-2">
                            <img src="{{asset('assets/images/'.env('APP_LOGO_URL'))}}" class="sidebar-logo-icon" alt="">
						</div>
					</div>

                    <div class="d-none d-lg-flex">
                        <h6 class="mb-0 fw-normal">{{env('APP_NAME')}}</h6>
                    </div>

					<ul class="nav gap-sm-2 order-1 order-lg-2 ms-auto">
						<li class="nav-item">
							<a href="" class="navbar-nav-link navbar-nav-link-icon rounded">
								<i class="ph-bell"></i>
								<span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">{{ $notificationCount }}</span>
							</a>
						</li>
						<li class="nav-item nav-item-dropdown-lg dropdown">
							<a href="#" class="navbar-nav-link align-items-center rounded p-1" data-bs-toggle="dropdown" aria-expanded="false">
								<div class="status-indicator-container">
									<img src="{{asset('assets/images/user-6.jpg')}}" class="w-32px h-32px rounded" alt="">
									<span class="status-indicator bg-success"></span>
								</div>
								<span class="d-none d-lg-inline-block mx-lg-2">{{auth()->user()->name}}</span>
							</a>

							<div class="dropdown-menu dropdown-menu-end">
								<a href="" class="dropdown-item">Edit Profile</a>
								<a href="" class="dropdown-item">Change Password</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item">Logout</a>
                                </form>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="content-inner">
                @yield('content')
                <div class="navbar navbar-sm navbar-footer border-top">
                    <div class="container-fluid">
                        <span>&copy; {{now()->year}} Copyright | {{env('APP_NAME')}}</span> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/notify.min.js') }}"></script>

	@if(Session::has('global'))
	<script>
		$(document).ready(function(){
			new Noty({
				layout: 'center',
				timeout: 2000,
				progressBar: true,
				text: '{{Session::get('global')}}',
				@if(Session::get('type') == 'info')
					type: 'info'
				@elseif(Session::get('type') == 'warning')
					type: 'warning'
				@elseif (Session::get('type') == 'danger')
					type: 'danger'
				@elseif (Session::get('type') == 'success')
					type: 'success'
				@endif
			}).show();
		});
	</script>
	@endif
</body>
</html>