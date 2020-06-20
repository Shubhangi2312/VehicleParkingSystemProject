<?php
	
	include_once("db.php");
	
	$sql = "INSERT INTO car_in(car_no,time_in,slot_no,date) VALUES ('$_POST[car]', '$_POST[time_in]', '$_POST[slot_no]', '$_POST[date]')";

	if(!mysqli_query($con,$sql))
	{
		die('Error : '.mysqli_error($con));
	}
	else
	{
		echo "<script>alert('inserted successfully !!!');</script>";
		echo "<script>window.location = 'car_in.php';</script>";
	}
	mysqli_close($con);
?>