<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" media="screen,projection" />
	<link rel="stylesheet" href="{{ asset('public/frontend/css/mystyle.css') }}" media="screen,projection" />
	<link rel="stylesheet" href="{{ asset('public/frontend/fonts/font-awesome/css/font-awesome.min.css')}}" media="screen,projection" />
	@yield('head')
	<title>@yield('title')</title>
	<!--Let browser know website is optimized for mobile-->
</head>

<body class="">
	<div class="ui thin sidebar left inverted vertical menu labeled icon visible" id="left_sb">
		<a class="item">
			<i class="browser icon"></i>
			Browser
		</a>
		<a class="item">
			<i class="plus icon"></i>
			Plus
		</a>
		<a class="item">
			<i class="settings icon"></i>
			Settings
		</a>
		<a class="item">
			<i class="shipping icon"></i>
			Settings
		</a>
	</div>
	<div class="ui black big launch right attached fixed button" id="sb_toggle">
		<i class="chevron left icon" id="itoggle"></i>
		<span class="text">Menu</span>
	</div>
	<div class="pusher">
		<div class="ui container">
			<div class="column">
			abc
			</div>
		</div>
	</div>
	@yield('page_heading')
	<div id="page_content">
		@yield('page_content')
	</div>
	<footer>
	</footer>
	<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/private.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/function.js')}}"></script>
	@yield('script')
</body>
</html>