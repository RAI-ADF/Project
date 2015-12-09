<!DOCTYPE html>
<html>
<head>
	@include('head')
</head>
	<body style="margin-top: 80px">
		<div class="container">
			<header class="row">
				@include('header')
			</header>
			<div id="main" class="row" style="margin-left: 30px;margin-right: 30px">
				@yield('content')
			</div>
			
			<footer>
				@include('footer')
			</footer>
		</div>
	</body>
</html>