<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="PageHome.aspx.cs" Inherits="PLNLite.Views.Application.PageHome" %>

<%@ Import Namespace="System.Web.Configuration" %>

<!DOCTYPE html>
<script runat="server">
    protected void Page_Load(object sender, EventArgs e)
    {
        Request.Cookies.Clear();

        if (!IsPostBack)
        {
            if (Request.QueryString["logout"] != null)
            {
                WebConfigurationManager.AppSettings["UserMenu"] = "";
                Session.Clear();
            }
        }
    }
</script>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PLNLite</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="presence by MM&TEL-C">
<meta name="author" content="MM&TEL-C">

<!-- Standard Favicon--> 
<link rel="shortcut icon" href="../../Scripts/CustomerCare/images/favicon/favicon.ico">

<!-- Standard iPhone Touch Icon--> 
<link rel="apple-touch-icon" sizes="57x57" href="../../Scripts/CustomerCare/images/touchicons/apple-touch-icon-57-precomposed" />
<!-- Retina iPhone Touch Icon--> 
<link rel="apple-touch-icon" sizes="114x114" href="../../Scripts/CustomerCare/assets/touchicons/apple-touch-icon-114-precomposed" />
<!-- Standard iPad Touch Icon--> 
<link rel="apple-touch-icon" sizes="72x72" href="../../Scripts/CustomerCare/assets/touchicons/apple-touch-icon-72-precomposed" />
<!-- Retina iPad Touch Icon--> 
<link rel="apple-touch-icon" sizes="144x144" href="../../Scripts/CustomerCare/assets/touchicons/apple-touch-icon-144-precomposed" />

<!-- Bootstrap CSS Files -->
<link href="../../Scripts/CustomerCare/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../../Scripts/CustomerCare/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<!-- Custom Fonts Setup via Font-face CSS3 -->
<link href="../../Scripts/CustomerCare/fonts/fonts.css" rel="stylesheet">
<!-- CSS files for plugins -->
<%--<link href="../../Scripts/CustomerCare/stylesheets/pace.preloader.css" rel="stylesheet">--%>
<link href="../../Scripts/CustomerCare/stylesheets/animate.css" rel="stylesheet">
<link href="../../Scripts/CustomerCare/stylesheets/owl.carousel.css" rel="stylesheet">
<link href="../../Scripts/CustomerCare/stylesheets/owl.theme.css" rel="stylesheet">
<link href="../../Scripts/CustomerCare/stylesheets/magnific-popup.css" rel="stylesheet" > 
<link href="../../Scripts/CustomerCare/stylesheets/jquery.tweet.css" rel="stylesheet"/>
<link href="../../Scripts/CustomerCare/stylesheets/foliohover.css" rel="stylesheet">
<link href="../../Scripts/CustomerCare/stylesheets/fancymenu.css"  rel="stylesheet">
<link href="../../Scripts/CustomerCare/stylesheets/standard-nav.css" rel="stylesheet">
<link href="../../Scripts/CustomerCare/stylesheets/intro.css" rel="stylesheet">

<!-- Main Template Styles -->
<link href="../../Scripts/CustomerCare/stylesheets/main.css" rel="stylesheet">
<!-- Main Template Responsive Styles -->
<link href="../../Scripts/CustomerCare/stylesheets/main-responsive.css" rel="stylesheet">
<!-- Main Template Retina Optimizaton Rules -->
<link href="../../Scripts/CustomerCare/stylesheets/main-retina.css" rel="stylesheet">
<!-- LESS stylesheet for managing color presets -->
<link rel="stylesheet/less" type="text/css" href="../../Scripts/CustomerCare/less/color-green.less">
<!-- LESS JS engine-->
<script src="../../Scripts/CustomerCare/less/less-1.5.0.min.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/modernizr.custom.js"></script>

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../Scripts/CustomerCare/bootstrap/js/html5shiv.js"></script>
      <script src="../../Scripts/CustomerCare/bootstrap/js/respond.min.js"></script>
    <![endif]-->

<style>
	.full-height{
		height: 100%;
	}
</style>
</head>


<body>


<div class="overlay overlay-hugeinc">
			<button type="button" class="overlay-close">Close</button>
			<nav>
				<ul>
					<li><a class="fancy-nav-close scroll" href="#slide1"><span>HOME</span></a></li>
					<li><a class="fancy-nav-close scroll" href="#about"><span>ABOUT</span></a></li>
					<li><a class="fancy-nav-close scroll" href="#testimonials">PROBLEM SOLVING<span></span></a></li>
					<li><a class="fancy-nav-close" href="../HelpDesk/HelpDesk.aspx"><span>HELP DESK</span></a></li>
                    <li><a class="fancy-nav-close scroll" href="#news"><span>FAQ</span></a></li>
					<li><a class="fancy-nav-close scroll" href="#contact"><span>CONTACT</span></a></li>
				</ul>
			</nav>
		</div>


<div class="static-side-navigation-wrap grey-bg  hidden-lg">
				<p><button id="trigger-overlay" type="button"></button></p>
	<%--<ul class="navigation">
		<li data-slide="1" ></li>
		<li data-slide="2"></li>
		<li data-slide="3"></li>
		<li data-slide="4"></li>
	    <li data-slide="5"></li>
	    <li data-slide="6"></li>
	    <li data-slide="7"></li>
	    <li data-slide="8"></li>
	</ul>--%>
	<div class="vertical-logo">
		<a href="../../Views/Application/PageHome.aspx"><%--<img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/vertical-logo.png"/>--%></a>
	</div>

</div>

 <!-- standard-header -->
<header class="standard-header dark-bg visible-lg">
            <div class="navbar container" role="navigation">

	            	<div class="row">
	            		
		              <div class="col-md-3 main-logo">
			                <%--<a class="brand white" href="#"><img alt="presence" title="helpdesk" src="../../Scripts/CustomerCare/images/standard-logo-yellow.png"/></a>--%>
		              </div>

		              <div class="col-md-9 main-nav">
				
			                <form class="navbar-form pull-right">
			                  <a class="btn btn-presence btn-presence-white presence-ease" href="PageSignIn.aspx">LOGIN</a>
			                </form>
			                <ul class="nav pull-right white">
				            <li><a class="scroll active" href="#slide1" id="slide1-linker"><span>HOME</span></a></li>
					        <li><a class="scroll" href="#about" id="about-linker"><span>ABOUT</span></a></li>
					        <li><a class="scroll" href="#testimonials" id="news-linker"><span>PROBLEM SOLVING</span></a></li>
					        <li><a href="../HelpDesk/HelpDesk.aspx"><span>HELP DESK</span></a></li>
                            <li><a class="scroll" href="#news" id="faq-linker"><span></span>FAQ</a></li>
					        <li><a class="scroll" href="#contact" id="contact-linker"><span>CONTACT</span></a></li>
			                </ul>
		              </div>
	            </div>

            	</div>
            	<!-- navbar:ends -->
 </header>
 <!-- standard-header:ends -->

	<div class="slide intro intro-with-sidenav text-center" id="slide1" data-stellar-background-ratio="0">


				<article class="call-to-action alternative-bg full-height">
					<div class="container">
					<div id="stats-carousel" class="stats-carousel owl-carousel owl-nav-sticky-wide">

			<div class="item stats-carousel-item">
					<div class="row">

						<article  class="col-md-12 pad-top pad-bottom">
							<h1 class="white vertical-center"><span>Welcome!</span> PLNLite Application is ready to help you out of problem. Visit our <a class="scroll" href="#news" style="color:grey;">FAQ</a> for detail.</h1>
							<div class="pad-top"><a href="../HelpDesk/HelpDesk.aspx" class="btn btn-presence btn-presence-color presence-ease">Complaint</a>&nbsp; &nbsp; &nbsp;<a href="../HelpDesk/Status.aspx" class="btn btn-presence btn-presence-color presence-ease">Status</a>&nbsp; &nbsp; &nbsp;<a href="../HelpDesk/Confirmation.aspx" class="btn btn-presence btn-presence-color presence-ease">Confirm</a></div></div>
						</article>
						
					</div>	
			</div>
			<!-- item:ends -->


			<%--<div class="item stats-carousel-item">
					<div class="row stats-wrap">

                        <article  class="col-md-12 pad-top pad-bottom">
							<h1 class="white vertical-center"><span>Good Corporate Governance</span>By click button below you can access the home master page of Good Corporate Governance.</h1>
							<div class="pad-top"><a href="../../Views/Application/PageHome.aspx" class="btn btn-presence btn-presence-color presence-ease">Home Master</a></div>	
						</article>

						<%--<article  class="col-md-4 stats-block">
							<img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/stats/01.png"/>
							<h2 class="stats-count">86</h2>
							<p class="stats-des"><span class="color-border">Pending</span></p>
						</article>
						<article  class="col-md-4 stats-block">
							<img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/stats/02.png"/>
							<h2 class="stats-count">34</h2>
							<p class="stats-des"><span class="color-border">In-Process</span></p>
						</article>
						<article  class="col-md-4 stats-block">
							<img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/stats/03.png"/>
							<h2 class="stats-count">24</h2>
							<p class="stats-des"><span class="color-border">Closed</span></p>
						</article>
						
					</div>			
			</div>--%>
			<!-- item:ends -->


	</div>
	</div>
</article>

	
	</div>
	<!--End Slide 1-->

<!--Mast-wrap : starts-->
<section class="mast-wrap overlay-close">
	
<!-- page-section : starts -->
<section id="about" class="about page-section">
	<section class="inner-section">

		<section class="container">
		
			<div class="row">
				<article class="col-md-12 text-center">

					<h1 class="main-heading  wow bounceInUp">About Us</h1>
					<div class="liner"><span class="color-bg"></span></div>
					
					<p class="promo-text-main  wow slideInRight" align="justify">Aplikasi PLNLite merupakan media untuk pelaporan masalah PT Pembangkit Listrik Nasional (Persero). Bertujuan untuk memudahkan pelaporan masalah dan menindaklanjuti permohonan tersebut.<br /><br />
                    </p>
					
				</article>
			</div>

		</section>
		<!-- container : ends -->
			
	</section>
	<!-- inner-section : ends -->


	<section class="inner-section add-top-half inner-bg about-inner-bg">


		<div id="about-carousel" class="about-carousel owl-carousel owl-nav-sticky-wide">

		<div class="item">

			<section class="container">


				<div class="row wow slideInDown">
					<article class="col-md-6 text-left about-inner-content dark-low-bg equal-height-one">
						<h3 class="white">Customer Care Team</h3>
						<div class="liner-small-left"><span class="color-bg"></span></div>
						<p>Tim Pengelola Customer Care adalah Divisi atau Bagian terkait terjadinya masalah umumnya, dan Divisi Lapangan khususnya. Divisi/Bagian ini akan membantu Anda untuk melakukan trouble shooting ada masalah yang Anda Temui.</p>
					</article>
					<article class="col-md-6 text-left about-inner-content color-bg equal-height-one">
						<a href="#" class="about-carousel-custom-next-trigger">
							<h1 class="white">Procedure</h1>
							<div class="proceed-btn-wrap"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/proceed-white.png"/></div>
						</a>
					</article>
				</div>

			</section>
			<!-- container : ends -->

		</div>
		<!-- item : ends -->


		<div class="item">

			<section class="container">

				<div class="row">
					<article class="col-md-3 text-left about-inner-content dark-low-bg text-center equal-height-two">
						<img title="helpdesk" alt="presence" class="img-responsive" src="../../Scripts/CustomerCare/images/team/05.jpg"/>
						<h3 class="white">P1</h3>
						<div class="liner-small-center"><span class="color-bg"></span></div>
						<p>Form Online</p>
						
					</article>
					<article class="col-md-3 text-left about-inner-content white-bg text-center equal-height-two">
						<img title="helpdesk" alt="presence" class="img-responsive" src="../../Scripts/CustomerCare/images/team/06.jpg"/>
						<h3 class="dark">P2</h3>
						<div class="liner-small-center"><span class="color-bg"></span></div>
						<p>Received Ticket</p>
					</article>
                    <article class="col-md-3 text-left about-inner-content dark-low-bg text-center equal-height-two">
						<img title="helpdesk" alt="presence" class="img-responsive" src="../../Scripts/CustomerCare/images/team/06.jpg"/>
						<h3 class="white">P3</h3>
						<div class="liner-small-center"><span class="color-bg"></span></div>
						<p>Confirmation Request</p>
					</article>
					<article class="col-md-3 text-left about-inner-content color-bg equal-height-two">
						<a class="scroll" href="#testimonials">
							<h1 class="white">Okay!</h1> <h2 style="color:white;font-size:60px;">Got It</h2>
							<div class="line-top-button"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/proceed-white.png"/></div>
						</a>
					</article>
				</div>

			</section>
			<!-- container : ends -->

		</div>
		<!-- item : ends -->
		</div>
		<!-- carousel : ends -->
			
	</section>
	<!-- inner-section : ends -->

	
</section>
<!-- page-section : ends -->



<!-- page-section : starts -->
<section id="testimonials" class="testimonials separator-section">
	<section class="inner-section">

		<section class="container">
		
			<div class="row">
				<article class="col-md-12 text-center">


					<div id="testimonials-carousel" class="testimonials-carousel owl-carousel owl-nav-sticky-wide">

						<div class="item testimonial-block">
								<div class="user-thumb"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/user.png"/></div>
                            <br /><br /><br /><br />
								<h3 align="justify"></h3>
								<div class="liner-small-center"><br /><br /><br /><span class="color-bg"></span></div>
								<h5><span>Mati Listrik</span></h5>
								<%--<p class="testimonial-brand"><span>Go </span></p>--%>
						</div>

						<div class="item testimonial-block">
								<div class="user-thumb"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/user.png"/></div>
                            <br /><br /><br />
								<h3 align="justify"></h3>
								<div class="liner-small-center"><br /><br /><br /><br /><span class="color-bg"></span></div>
								<h5><span>Pencabutan</span></h5>
								<%--<p class="testimonial-brand"><span></span></p>--%>
						</div>

					</div>
					
				</article>
			</div>

		</section>
		<!-- container : ends -->
			
	</section>
	<!-- inner-section : ends -->
</section>

<!-- page-section : starts -->
<section id="news" class="news page-section color-bg">

	<section class="inner-section">

		<section class="container">
		
			<div class="row">
				<article class="col-md-12 text-center">

					<h1 class="main-heading white">FAQ</h1>
					<div class="liner"><span class="dark-bg"></span></div>
					
					<p class="promo-text white">Pertanyaan yang paling sering disampaikan kepada kami.</p>
				</article>
			</div>

		</section>
		<!-- container : ends -->
			
	</section>
	<!-- inner-section : ends -->

	<section class="inner-section add-top-half">

		<section class="container">

				<div class="row news-list-item">
					<article class="col-md-3 text-left news-inner-content grey-bg wow slideInLeft">
						<h4><span class="news-date color">20th</span> <br/><span class="news-month">February</span> 2015</h4>
						<h6 class="news-author color">by Administrator</h6>
					</article>
					<article class="col-md-9 text-left news-inner-content white-bg wow slideInRight">
						<h3 class="dark">Kapan pencabutan jaringan listrik dilakukan oleh pihak PLN?</h3>
						<div class="liner-small-left"><span class="color-bg"></span></div>
						<p align="justify">Pihak PLN akan melakukan pencabutan jaringan listrik ketika pelanggan tidak membayar selama waktu yang ditentukan.</p>
						<%--<a class="btn btn-presence btn-presence-color presence-ease" href="../../Scripts/CustomerCare/single-post.html">Read Full Story</a>--%>
					</article>
				</div>

				
                <div class="row news-list-item">
					<article class="col-md-3 text-left news-inner-content grey-bg wow slideInLeft">
						<h4><span class="news-date color">20th</span> <br/><span class="news-month">February</span> 2015</h4>
						<h6 class="news-author color">by Administrator</h6>
					</article>
					<article class="col-md-9 text-left news-inner-content dark-low-bg wow slideInRight">
						<h3 class="white">Masalah apa yang bisa saya laporkan?</h3>
						<div class="liner-small-left"><span class="color-bg"></span></div>
						<p align="justify">Saudara bisa melaporkan berbagai masalah seperti Mati Listrik, Pencabutan Listrik, Pencurian Kabel dan masalah yang berkaitan dengan PLN.</p>
						<%--<a class="btn btn-presence btn-presence-color presence-ease" href="../../Scripts/CustomerCare/single-post.html">Read Full Story</a>--%>
					</article>
				</div>   

			</section>
			<!-- container : ends -->
			
	</section>
	<!-- inner-section : ends -->

</section>
<!-- page-section : ends -->


<!-- page-section : starts -->
<section id="contact" class="contact custom-bg-green separator-section">
	<section class="inner-section">

		<section class="container">

			<div class="row">
				<article class="col-md-12 text-center">

					<h1 class="main-heading white wow slideInDown">Contact Us</h1>
					<div class="liner"><span class="dark-bg"></span></div>
					
					<p class="promo-text white wow slideInDown">If you have any question please contact us or email us below.</p>
					
				</article>
			</div>
		
			<div class="row">
				<article class="col-md-12 text-center">

					<div id="contact-carousel" class="contact-carousel owl-carousel owl-nav-sticky-wide">

						<div class="item contact-block">
								<div class="email-thumb"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/email.png"></div>
								<a class="email-us  presence-ease" href="../../Scripts/CustomerCare/#">plnlite@pln.co.id</a>
								<p class="contact-subline"><span>We are online from 07.00 - 16.00, West Java, Indonesia</span></p>
								<a class="btn btn-presence btn-presence-white presence-ease contact-form-expand contact-carousel-custom-next-trigger" href="../../Scripts/CustomerCare/#">Show Contact Form</a>
						</div>
						<!-- contact-block:ends -->

<div class="item contact-block contact-mail-wrap">

	<div class="row">
		<article class="col-md-12">
			<div class="alert alert-error error" id="fname">
				<p>Name must not be empty</p>
			</div>
			<div class="alert alert-error  error" id="fmail">
				<p>Please provide a valid email</p>
			</div>
			 <div class="alert alert-error  error" id="fmsg">
				 <p>Message should not be empty</p>
			 </div>
		</article>
	</div>

	  <form name="myform" id="contactForm" action="sendcontact.php" enctype="multipart/form-data" method="post"> 
		<div class="row">
			<article class="col-md-12  col-sm-12">
				<input type="text" placeholder="Your Name" id="name" name="name" size="100">
			</article>
		</div>
		<div class="row">
			<article class="col-md-12  col-sm-12" >
				 <input type="text" placeholder="Valid email ID" name="email" id="email" size="30">
			 </article>
		</div>
		<div class="row add-top-small" >
			 <article class="col-md-12">
				<textarea placeholder="Your Message" name="message" cols="40" rows="3" id="msg"></textarea>
				<div class="btn-wrap">
					<button class="btn btn-presence btn-presence-white presence-ease" id="submit" name="submit" type="submit">Send Message</button>
				</div>
			</article>
		</div>
	 </form>

</div> 
<!-- contact-block:ends -->
						
						<div class="item contact-block">
								<div class="newsletter-thumb"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/newletter.png"></div>
								<a class="email-us  presence-ease" href="#">Ext. Number</a>
								<p class="contact-subline"><span>Feel free to contact us by Extension Number at 37406 / 37407</span></p>
								<%--<a class="btn btn-presence btn-presence-white presence-ease" href="../../Scripts/CustomerCare/#">Grab Newsletter</a>--%>
						</div>
						<!-- contact-block:ends -->


						<div class="item contact-block">
								<div class="twitter-thumb"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/home.png"></div>
								<a class="email-us  presence-ease" href="#">Office</a>
								<p class="contact-subline"><span><br /> 
                                    PT PLN <br />
                                   Jl. Soekarno-Hatta 169, Bandung, West Java
                                </span></p>
								<%--<a class="btn btn-presence btn-presence-white presence-ease" href="../../Scripts/CustomerCare/#">@username</a>--%>
						</div>
						<!-- contact-block:ends -->

					</div>
					
				</article>
			</div>
			<!-- row : ends -->

		</section>
		<!-- container : ends -->
			
	</section>
	<!-- inner-section : ends -->

</section>

<footer id="foot" class="mastfoot">

	<!-- inner-section : starts -->
	<%--<section class="inner-section tweet-panel">
		<!-- container : starts -->
		<section class="container">
			<div class="row">
				<article class="col-md-12 text-left">
				<h3>@twitter</h3>
			              <article id="ticker" class="query"></article>	
			</article>
			</div>
		</section>
		<!-- container : ends -->
	</section>--%>
	
	<section class="inner-section foot-top">
		
		<section class="container">

			<div class="row">
				<article class="col-md-8 credentials-wrap">
					<ul class="credentials text-left">
						<li><a href="../../Scripts/CustomerCare/#"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/social/mail.png"/><span class="credential-text">plnlite@pln.co.id</span></a></li>
						<li><a href="../../Scripts/CustomerCare/#"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/social/phone.png"/><span class="credential-text">37406 / 37407</span></a></li>
					</ul>
				</article>
				<article class="col-md-4 credentials-wrap">
					<ul class="credentials text-right">
						<li><a href="../../Scripts/CustomerCare/#"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/social/locate.png"/><span class="credential-text">Jalan Soekarno-Hatta No. 169, Bandung 40161</span></a></li>
					</ul>
				</article>
			</div>

		</section>


	</section>



	<section class="inner-section foot-bottom">
		
		<section class="container">

			<div class="row">
				<article class="col-md-6 social-wrap">
					<ul class="social text-left">
						<li><a href="../../Scripts/CustomerCare/#"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/social/facebook.png"/></a></li>
						<li><a href="../../Scripts/CustomerCare/#"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/social/twitter.png"/></a></li>
						<li><a href="../../Scripts/CustomerCare/#"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/social/google.png"/></a></li>
					</ul>
				</article>
				<article class="col-md-6 credits-wrap text-right">
					<p>Made by IT Team MM&TEL-C</p>
					<p>Copyright &copy; 2015 MM&TEL-C. All rights reserved.</p>
				</article>
			</div>

		</section>


	</section>
	
	

</footer>


</section>
<!-- Mast-wrap:ends -->

<!-- Core JS Libraries -->
<script src="../../Scripts/CustomerCare/bootstrap/js/jquery.js" type="text/javascript"></script>
<script src="../../Scripts/CustomerCare/javascripts/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="../../Scripts/CustomerCare/bootstrap/js/bootstrap.js" ></script> 

<!-- JS Plugins -->
<%--<script src="../../Scripts/CustomerCare/javascripts/pace.min.js"></script>--%>
<script src="../../Scripts/CustomerCare/javascripts/retina.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/device.min.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/owl.carousel.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/waypoints.min.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/jquery.tweet.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/okvideo.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/jquery.mixitup.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/flexslider.js" ></script> 

<script src="../../Scripts/CustomerCare/javascripts/jquery.magnific-popup.js"></script> 

<!-- <script src="../../Scripts/CustomerCare/javascripts/smooth-scroll.js"></script> -->
<script src="../../Scripts/CustomerCare/javascripts/smooth-scroll-standard-nav.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/standard-nav-action.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/form-validation.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/classie.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/fancymenu-rollin.js"></script>

<!-- Scroll Animations Setup -->
<script src="../../Scripts/CustomerCare/javascripts/wow.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/animations-init.js"></script>

<!-- Custom Scripts Setup -->
<script src="../../Scripts/CustomerCare/javascripts/carousel-init.js" ></script> 
<script src="../../Scripts/CustomerCare/javascripts/portfolio.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/intro.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/main.js"></script>

</body>
</html>