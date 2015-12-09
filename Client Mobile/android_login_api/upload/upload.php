<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$image = $_POST['image'];
    $caption = $_POST['caption'];

		require_once('dbConnect.php');

		$sql = "INSERT INTO image (image,caption) VALUES ('$image','$caption')";

		$stmt = mysqli_prepare($con,$sql);

		//mysqli_stmt_bind_param($stmt,"s",$image);
		mysqli_stmt_execute($stmt);

		$check = mysqli_stmt_affected_rows($stmt);

		if($check == 1){
			echo "Image Uploaded Successfully";
		}else{
			echo "Error Uploading Image";
		}
		mysqli_close($con);
	}else{
		echo "Error";
	}
?>
