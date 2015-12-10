<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>EVVOTE</title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('css/linea-icon.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('css/fancy-buttons.css')}}" />
	
	<!--=== Google Fonts ===-->
	<link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:600,400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<!--=== Other CSS files ===-->
	<link rel="stylesheet" href="{{URL::asset('css/animate.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('css/jquery.vegas.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('css/baraja.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('css/jquery.bxslider.css')}}" />
	
	<!--=== Main Stylesheets ===-->
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}" />
	
	<!--=== Color Scheme, three colors are available red.css, orange.css and gray.css ===-->
	<link rel="stylesheet" id="scheme-source" href="{{URL::asset('css/schemes/gray.css')}}" />
	
	<!--=== Internet explorer fix ===-->
	<!-- [if lt IE 9]>
		<script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif] -->
	
	
</head>
<body>
	<!--=== Preloader section starts ===-->
	<section id="preloader">
		<div class="loading-circle fa-spin"></div>
	</section>
	<!--=== Preloader section Ends ===-->
	
	<!--=== Header section Starts ===-->
	<div id="header" class="header-section">
		<!-- sticky-bar Starts-->
		<div class="sticky-bar-wrap">
			<div class="sticky-section">
				<div id="topbar-hold" class="nav-hold container">
					<nav class="navbar" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
							</button>
							<!--=== Site Name ===-->
							<a class="site-name navbar-brand" href="#"><span>E</span>vvote</a>
						</div>
						
						<!-- Main Navigation menu Starts -->
						<div class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="current"><a href="#header">Home</a></li>
								<li><a href="#section-services">View Vote</a></li>
							</ul>
						</div>
						<!-- Main Navigation menu ends-->
					</nav>
				</div>
			</div>
		</div>
		<!-- sticky-bar Ends-->
		<!--=== Header section Ends ===-->
		
		<!--=== Home Section Starts ===-->
		<div id="section-home" class="home-section-wrap center">
			<div class="section-overlay"></div>
			<div class="container home">
				<div class="row">
					<h1 class="well-come">Evvote</h1>
					
					<div class="col-md-8 col-md-offset-2">
						<p class="intro-message">Transform the conventional vote into electronic vote</p>
						
						
					</div>
				</div>
			</div>
		</div>
		<!--=== Home Section Ends ===-->
	</div>
	
	
	<!--=== Services section Starts ===-->
	<section id="section-services" class="services-wrap">
		<div class="container services">
			<div class="row">
			
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h3>Vote Lists</h3><br>
					<h5>Click to view result </h5>
				</div>
				 @if ($question->isEmpty())
                    <p> There is no Vote.</p>
                @else
					@foreach($question as $question)
						<div class="col-md-10 col-md-offset-1 center section-title">
						<button type="submit" class="fancy-button button-line button-white large zoom subform">
							{!! $question->id !!}
							<a href="{!! action('ResultsController@show', $question->slug) !!}">{!! $question->question !!}</a>
						</button>
						<div>
                               <!-- <tr>
                                    <td>{!! $question->id !!} </td>
                                    <td>
										<a href="{!! action('QuestionsController@show', $question->slug) !!}">{!! $question->question !!}</a>
									</td>
                                    
                                </tr>-->
                            @endforeach
				@endif
				
				
			</div>
		</div>
	</section>
	<!--=== Services section Ends ===-->

	<!--=== Footer section Starts ===-->
	<div id="section-footer" class="footer-wrap">
		<div class="container footer center">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="footer-title"><!-- Footer Title -->
						<a class="site-name" href="#"><span>E</span>VVOTE</a>
					</h4>
					
					
					<p class="copyright">All rights reserved &copy; 2015</p>
				</div>
			</div>
		</div>
	</div>
	<!--=== Footer section Ends ===-->
	
<!--==== Js files ====-->
<!--==== Essential files ====-->
<script type="text/javascript" src="{{URL::asset('js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.easing.1.3.js')}}"></script>

<!--==== Slider and Card style plugin ====-->
<script type="text/javascript" src="{{URL::asset('js/jquery.baraja.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.vegas.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.bxslider.min.js')}}"></script>

<!--==== MailChimp Widget plugin ====-->
<script type="text/javascript" src="{{URL::asset('js/jquery.ajaxchimp.min.js')}}"></script>

<!--==== Scroll and navigation plugins ====-->
<script type="text/javascript" src="{{URL::asset('js/jquery.nicescroll.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.nav.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.fitvids.js')}}"></script>

<!--==== Custom Script files ====-->
<script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>

</body>
</html>