<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if($_POST['submit']){
include_once("connect.php");

	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);

	$sql = "SELECT * FROM admin WHERE username = '$username' AND is_aktif = '1' LIMIT 1";
	$query = mysqli_query($dbCon,$sql);

	if($query) {
		$row = mysqli_fetch_row($query);
		$userId = $row[0];
		$dbUsername = $row[1];
		$dbPassword = $row[2];
	}

	if($username == $dbUsername && $password == $dbPassword) {
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $userId;
		header('location:home.php');
	} //else {
		//echo"Incorrect NIK or PASSWORD";
	//}
}
?> gagal login