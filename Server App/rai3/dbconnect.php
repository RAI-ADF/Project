<?php
//Create connection
// $conn = new mysqli("localhost","root","","rai");

//check connection
// if ($conn->connect_error) {
//      die("Connection failed: " . $conn->connect_error);
// }
$conn=mysql_connect("localhost","root","");
mysql_select_db("rai",$conn);
?>