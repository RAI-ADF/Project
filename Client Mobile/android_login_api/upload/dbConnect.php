<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASS','root');
	define('DB','android_api');

	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
?>
