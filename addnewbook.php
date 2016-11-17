<?php
$book_name=$_GET["bname"];
$author_name=$_GET["aname"];
$subject_name=$_GET["subject"];
$no_of_copies=$_GET["ncopies"];


$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"validation");
mysqli_query($con,"insert into books (Book_name,author_name,subject_name,no_of_copies) values('$book_name','$author_name','$subject_name','$no_of_copies')")

?>