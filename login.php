<?php
$email=$_GET["email"];
$pswrd=$_GET["pswrd"];

$con=mysqli_connect("localhost:3306","root","","validation");


$result=mysqli_query($con,"select email,pswrd from user where email='$email' and pswrd='$pswrd'");
if(mysqli_num_rows($result)>0)
	echo "TRUE";
?>