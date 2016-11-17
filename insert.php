<?php
$name=$_GET["name"];
$email=$_GET["email"];
$phno=$_GET["phno"];
$pswrd=$_GET["pswrd"];

$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"validation");
mysqli_query($con,"insert into user (name,email,phno,pswrd) values('$name','$email','$phno','$pswrd')")
?>