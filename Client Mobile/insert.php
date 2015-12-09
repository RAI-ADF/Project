<?php
	$host='127.0.0.1';
	$uname='root';
	$pwd='';
	$db="android";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
	 
	$nama=$_REQUEST['nama'];
	$harga=$_REQUEST['harga'];

	$flag['code']=0;

	if($r=mysql_query("insert into pesan values('$nama','$harga') ",$con))
	{
		$flag['code']=1;
		echo"hi";
	}

	print(json_encode($flag));
	mysql_close($con);
?>