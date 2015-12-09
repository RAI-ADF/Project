<?php
include_once 'dbconnect.php';

if(isset($_GET['update']))
{
	$id = $_GET['update'];

	$res = mysql_query("UPDATE users SET status='active' WHERE id=$id");

	echo "<meta http-equiv='refresh' content='0;url=verifikasi.php'>";

}
?>