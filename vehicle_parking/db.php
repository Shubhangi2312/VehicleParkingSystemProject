<?php
//session_start();

$con=mysqli_connect("localhost","root","","parking");

if(mysqli_connect_error())
{
	echo "failed";
	mysqli_connect_error();
}

?>