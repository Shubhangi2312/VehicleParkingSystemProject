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
 
  <script>
	function callme()
	{
			
		var a=document.getElementById('car').value;
		window.location="car_out.php?b="+a;
		
	}
	
	function calc_fees()
	{
		var x=document.getElementById("time_in").value;
		var y=document.getElementById("time_out").value;
		
		if(x=="")
		{
			x=0;
		}
		if(y=="")
		{
			y=0;
		}
		var amt=(parseInt(y)-parseInt(x))*50;
		document.getElementById('fees').value=amt;
	}
  </script>
  
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
        <a class="navbar-brand" href="car_out.php"><i>Smart Parking</i><!--Men<span>tor</span>--></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="home.php">Home</a></li>
		  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Parking Details<i class="fa fa-angle-down"></li></a>
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
  
  <br/><br/><br/><br/>
  <div class="container">
	  <div class="row">
		<div class="col-xs-12">
		  
		  <div class="panel panel-success">
		  
			<div class="panel-heading">
			  <h3>Car Out</h3>
			</div>
			
			<div class="panel-body">
				<form action="ins_car_out.php" name="myForm" method="post">
					<div class="col-md-4"></div>
						<div class="col-md-12">
							<b>1.</b>Car No:
								<input type="text" id="car" value="<?php if(isset($_GET['b'])) {echo $_GET['b'];} ?>" name="car" autofocus required class="form-control" />
										<br/>
						</div>						

						<div class="col-md-8">
							<br><a onclick="callme()" style="cursor:pointer;">Search</a>
						</div>
						
						<?php
							include_once("db.php");
							if(isset($_GET['b']))
							{
								$qry = "select * from car_in where car_no = '".$_GET['b']."'";
								$res = mysqli_query($con,$qry);
								
								if($result = (mysqli_fetch_array($res)))
								{	
									
									echo'
									
										<div class="col-md-12">
											<b>1.</b>Car No.
											<input type="text" readonly name="car" value="'.$result[0].'" required class="form-control" />
											<br/>
										</div>
										
										<div class="col-md-12">
											<b>2.</b>Time In:
											<input type="time"  name="time_in" id="time_in" value="'.$result[1].'" required class="form-control" onkeyup="calc_fees()" />
											<br/>
										</div>
										
										<div class="col-md-12">
											<b>3.</b>Time Out:
											<input type="time"  name="time_out" id="time_out" required class="form-control" onkeyup="calc_fees()" />
											<br/>
										</div>
										
										<div class="col-md-12">
											<b>4.</b>Slot No:
											<select class="form-control" name="slot_no"  selected>
												
												<option value="'.$result[2].'" selected>'.$result[2].'</option>
												<option value="Slot 2">Slot 2</option>
												<option value="Slot 3">Slot 3</option>
												<option value="Slot 4">Slot 4</option>
												<option value="Slot 5">Slot 5</option>
												<option value="Slot 6">Slot 6</option>
												<option value="Slot 7">Slot 7</option>
												<option value="Slot 8">Slot 8</option>
												<option value="Slot 9">Slot 9</option>
												<option value="Slot 10" >Slot 10</option>
											</select>
											
											<br/>
										</div>
										
										<div class="col-md-12">
											<b>5.</b>Date:
											<input type="date" name="date" value="'.$result[3].'" required class="form-control" />
											<br/>
										</div>	
										
										<div class="col-md-12">
											<b>6.</b>Fees:
											<input type="text" name="fees" id="fees" required class="form-control" onkeyup="calc_fees()" />
											<br/>
										</div>	
										
										<div class="row">
											<div class="col-xs-12">
												<div align="center">
													<button type="submit" class="btn btn-info btn-flat">submit</button>
													
												</div>
											</div>
										</div>';
								}
							}
						?>
						
							
				</form>
			 
			  
			</div>
			
		  </div>
		
		</div>
	  </div>
	</div>
  
  

  
  
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
