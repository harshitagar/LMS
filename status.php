<?php
$book_name="";
$author_name="";
$subject_name="";
$no_of_copies="";
$total="";

$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"validation");
for ($id=1;$id<2;$id++)

	{
	$result=mysqli_query($con,"select * from books where id=2");
	$resultarr = mysqli_fetch_assoc($result);
	$book_name = $resultarr["Book_name"];
	$author_name=$resultarr["Author_name"];
	$subject_name=$resultarr["Subject_name"];
	$no_of_copies=$resultarr["No_of_copies"];
	echo "&lttr&gt&ltth&gt'$book_name'&lt/th&gt &lt th&gt'$author_name'&lt/th&gt &ltth&gt'$subject_name'&lt /th&gt&lt th&gt'$no_of_copies'&lt/th&gt&lt/tr&gt";

}

?>