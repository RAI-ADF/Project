<?php

$dbCon = mysqli_connect("localhost", "root", "", "rai");
	
if(mysqli_connect_errno()){
	echo "failed to connect " . mysqli_connect_error();
}
?>