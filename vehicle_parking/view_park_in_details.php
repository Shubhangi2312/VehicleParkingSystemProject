<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMART_PARKING home.php</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php"><i>Smart Parking</i><!--Men<span>tor</span>--></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="home.php">Home</a></li>
		  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Parking Details<i class="fa fa-angle-down"></a>
              <ul class="dropdown-menu">
                 <li><a href="car_in.php">Park Car_In</a></li>
                 <li><a href="car_out.php">Park Car_Out</a></li>
				 <li><a href="view_park_in_details.php">View Park in Details</a></li>
				 <li><a href="view_park_out_details.php">View Park out Details</a></li>
               
              </ul>
          </li>
          <li><a href="rto.php">RTO Details</a></li>
          <li><a href="police.php">Police Records</a></li>
		  <li><a href="logout.php">Logout</a></li>
       
        </ul>
      </div>
    </div>
  </nav>
  <br><br>
  <br><br><br>
    <div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-success">
				<div class="panel-heading"><b>View Parking Details</b></div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered">
							<tr class="warning">
								<th>Car NO.</th>
								<th>Time_in</th>
								<th>Slot_no</th>
								<th>Date</th>
								
								
							</tr>
							
							<?php
								include_once("db.php");
								$qry="select * from car_out";
								$res=mysqli_query($con,$qry);
								
								while($result=mysqli_fetch_array($res))
								{
									echo'
										<tr>
											<td>'.$result[0].'</td>
											<td>'.$result[1].'</td>
											<td>'.$result[2].'</td>
											<td>'.$result[3].'</td>
											
										</tr>';
								}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
	
		
  