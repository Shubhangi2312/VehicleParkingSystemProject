<?php
	
	include_once("db.php");
	
	$sql = "INSERT INTO car_out(car_no,time_in,time_out,slot_no,date,fees) VALUES ('$_POST[car]', '$_POST[time_in]',
	'$_POST[time_out]','$_POST[slot_no]','$_POST[date]','$_POST[fees]')";

	if(!mysqli_query($con,$sql))
	{
		die('Error : '.mysqli_error($con));
	}
	else
	{
		echo "<script>alert(' successfully !!!');</script>";
		echo "<script>window.location = 'car_out.php';</script>";
	}
	mysqli_close($con);
?>