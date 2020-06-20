<?php
	
	include_once("db.php");
	
	$sql = "INSERT INTO register(name,phno,address,email,password) VALUES ('$_POST[name]', '$_POST[phno]', '$_POST[address]', '$_POST[email]', '$_POST[password]')";

	if(!mysqli_query($con,$sql))
	{
		die('Error : '.mysqli_error($con));
	}
	else
	{
		echo "<script>alert('Registered successfully !!!');</script>";
		echo "<script>window.location = 'index.html';</script>";
	}
	mysqli_close($con);
?>