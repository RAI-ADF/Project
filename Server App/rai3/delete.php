<?php
include_once 'dbconnect.php';

if(isset($_GET['delete']))
{
	$id = $_GET['delete'];

	$res = mysql_query("DELETE FROM users WHERE id=$id");

	echo "<meta http-equiv='refresh' content='0;url=verifikasi.php'>";

}
?>