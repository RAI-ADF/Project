<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Rapido - Responsive Admin Template</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/styles-responsive.css">
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo">
					<img src="assets/images/logo.png">
				</div>
				<!-- start: LOGIN BOX -->
				<div class="box-login">
				
					<h3>Sign in to your account</h3>
					<p>
						Please enter your name and password to log in.
					</p>
				<form class="form-login" action="http://localhost/RAI/rentcaradmin/login" method="post" name="login_form" id="login_form">
						<?php if (! empty($pesan)) : ?>
						<p id="message">
						<?php echo $pesan; ?>
							</p>
						<?php endif ?>
						
							<p class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" value="<?php echo set_value('username');?>">
									<i class="fa fa-user"></i> </span>
										<?php echo form_error('username', '<p class="field_error">', '</p>');?>
							</p>
							<p class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password"  value="<?php echo set_value('password');?>">
									<i class="fa fa-lock"></i>
									<?php echo form_error('password', '<p class="field_error">', '</p>');?>

							</p>
								<input type="submit" name="submit" id="submit" value="Login" class="btn btn-green pull-right">		
					</form>								
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						2014 &copy; Rapido by cliptheme.
					</div>
					<!-- end: COPYRIGHT -->
				</div>
			</div>
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
		<!--<![endif]-->
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/jquery.transit/jquery.transit.js"></script>
		<script src="assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/js/login.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>