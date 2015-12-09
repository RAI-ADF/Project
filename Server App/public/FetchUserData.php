<?php
	$con=mysqli_connect("192.168.43.4:80","root","","legitz");
	
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	$statement = mysqli_prepare($con, "SELECT * FROM users WHERE email =? AND password =?");
	mysqli_stmt_bind_param($statement, "ss", $email, $password);
	mysqli_stmt_execute($statement);
	
	mysqli_stmt_store_result($statement);
	mysqli_stmt_bind_result($statement, $id, $email, $password, $hak_akses);
	
	$user = array()
	
	while(mysqli_stmt_fetch($statement)){
		$user[email]=$email;
	}
	
	echo json_encode[$user];
	
	mysqli_stmt_close($statement);
	mysqli_close($con);
?>