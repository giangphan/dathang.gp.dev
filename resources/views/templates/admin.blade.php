<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('public/frontend/css/admin.css') }}" media="screen,projection" />
	<link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap/bootstrap.min.css')}}" media="screen,projection" />
	<link rel="stylesheet" href="{{ asset('public/frontend/fonts/font-awesome/css/font-awesome.min.css')}}" media="screen,projection" />
	@yield('head')
	<title>@yield('title')</title>
	<!--Let browser know website is optimized for mobile-->
</head>

<body>
	<header id="header_main">
		<div class="header_content">
			<nav class="navbar">
				<div id="menu_top" class="pull-left dropdown">
					<div class="menu_top_dropdown">
						<a class="dropdown-toggle top_menu_toggle" type="button" id="dropdown_top_menu" data-toggle="dropdown">
							<i class="glyphicon glyphicon-th"></i>
						</a>
						<div class="dropdown-menu" role="menu" aria-labelledby="dropdown_top_menu">
							<div class="dropdown_grid">
								<a href="{{ URL::route('dashboard') }}" class="col-md-4 col-xs-12 col-sm-6 menu_icon">
									<i class="glyphicon glyphicon-tasks"></i>
									<span>Quản lý</span>
								</a>
								@if(Auth::check())
								@if(Auth::user()->level == 1 || Auth::user()->level == 3)
								<a href="{{url('admin/order/add')}}" class="col-md-4 col-xs-12 col-sm-6 menu_icon">
									<i class="glyphicon glyphicon-plus"></i>
									<span>Tạo đơn hàng</span>
								</a>
								<a href="{{url('admin/account')}}" class="col-md-4 col-xs-12 col-sm-6 menu_icon">
									<i class="glyphicon glyphicon-user"></i>
									<span>Tài khoản</span>
								</a>
								@endif
								@endif
							</div>
						</div>
					</div>
				</div>
				@if(Auth::check())
				<div id="menu_top_right" class="pull-right">
					<div class="menu_top_dropdown">
						<a class="dropdown-toggle top_menu_toggle" type="button" id="dropdown_top_right_menu" data-toggle="dropdown">
							<i class="glyphicon glyphicon-user"></i> {{Auth::user()->name}}
						</a>
						<div class="dropdown-menu-right" role="menu" aria-labelledby="dropdown_top_right_menu">
							<div class="dropdown_grid">
								<a href="{{ url('logout') }}" class="menu_icon">
									<i class="glyphicon glyphicon-log-out"></i> Đăng xuất
								</a>
							</a>
						</div>
					</div>
				</div>
				@endif
			</div>
		</nav>
	</div>
</header>
@yield('page_heading')
<div id="page_content">
	@yield('page_content')
</div>
<footer>
</footer>
<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('public/frontend/js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/js/script.js')}}"></script>
@yield('script')
</body>
</html>