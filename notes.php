<?php
	$note=$_GET["note"];
	$type=$_GET["type"];
	if($note!="")
	{
		$con=mysqli_connect("localhost:3306","root","");
		mysqli_select_db($con,"validation");
		mysqli_query($con,"create table if not exists notes(notes varchar(256))");
		if($type=="send")
			mysqli_query($con,"UPDATE notes SET notes = '$note' WHERE id= 1;");
		if($type=="get")
		{
			$result=mysqli_query($con,"Select notes from notes where id=1");
			$resultarr = mysqli_fetch_assoc($result);
			$attempts = $resultarr["notes"];
			echo $attempts;
		}
	}
?>