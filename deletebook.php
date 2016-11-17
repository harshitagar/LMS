<?php
$book_name=$_GET["bname"];

$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"validation");
mysqli_query($con,"delete from books where Book_name='$book_name'");

?>