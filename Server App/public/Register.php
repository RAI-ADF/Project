<?php
	$con=mysqli_connect("192.168.43.4:80","root","","legitz");
	
	$email = $_POST["email"];
	$password = $_POST["password"];
	$hak_akses = $_POST["hak_akses"];
	
	$statement = mysqli_prepare($con, "INSERT INTO users (email, password, hak_akses) VALUES (?,?,?)");
	mysqli_stmt_bind_param($statement, "ssi", $email, $password, $hak_akses);
	mysqli_stmt_execute($statement);
	
	mysqli_stmt_close($statement);
	mysqli_close($con);
?>