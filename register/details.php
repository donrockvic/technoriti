<?php  require_once("includes/session.php"); ?>
<?php  require_once("includes/db_connection.php");  ?>
<?php  require_once("includes/validation_functions.php");  ?>
<?php  require_once("includes/events_functions.php");  ?>
<?php  require_once("includes/functions.php");  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta name="description" content="Technical Fest of BCE, Bhagalpur">
    <meta name="keywords" content="Technoriti,Technoriti-16,technoriti,techfest bhagalpur,technoriti bhagalpur,BCE technofest,BCE techfest,BCE fest,bce techfest,bce technofest,bhagalpur college of engineering technical fest,parakram,umang">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../events/event.css" type="text/css">
    <title>Dashboard|Technoriti-16</title>
    <!-- Bootstrap -->
    <link rel="shortcut icon" href="../images/technoriti-logo-boom.png" />
	<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/nav.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <style type="text/css">
		body{
			background-color:#E88312;
		}
		.box{
			border:2px solid #FFFFFF;
			border-radius:20px;
			height:100%;
		}
		.container-fluid{
			height:100%;
			overflow:hidden;
		}
	 td{
			font-size: large;
		}
		</style>
  </head>
  
  <body style="padding-top: 50px">
  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>`
      <a class="navbar-brand" href="#"><img src="../images/technoriti-logo-boom.png" height="60" width="80" alt="logo" /></a></div>
   <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar1">
        <ul class="nav navbar-nav">
          <li><a href="../">HOME</a></li>
          <li class="active"><a href="../events">EVENTS</a></li>
          <li><a href="../other/parakram.php">PARAKRAM</a></li>
          <li><a href="../other/umang.php">UMANG</a></li>
          <li><a href="../other/alumni.php">SANGAM</a></li>
          <li><a href="../other/pmentors.php">OUR MENTOR</a></li> 
          <li><a href="../sponsors.php">SPONSORS</a></li>
          <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<div class="container-fluid" style="margin-top:5%">
  <div class="row">
  <div class="col-md-2 box" style="padding-top:5%">
  
  	<div role="tabpanel">
         <ul class="nav" role="tablist">
          <li class="active"><a href="#home1" data-toggle="tab"  role="tab"><div class="row tile">EVENTS</div></a></li>
         
          <li><a href="#paneTwo2"  data-toggle="tab" role="tab"><div class="row tile">REGISTRATION DETAILS</div></a></li>
          
           <li><a href="#paneTwo8"  data-toggle="tab" role="tab"><div class="row tile">AMBASSADORS DETAILS</div></a></li>
        </ul>
  	   </div>
  
  </div>
  <div class="col-md-5 box">
  
  	<div id="tabContent1" class="tab-content" style="margin-bottom:8em">
          <div class="tab-pane fade in active" id="home1">
            <h3>EVENTS YOU REGISTERED</h3>
            <p>YOU ARE REGISTERED IN FOLLOWING SPORTS EVENTS:</p>
            <div>
            
            <?php
			$id=$_SESSION["id"];
			$res=get_events_dtl($id);
			?>
			<ul>
			<?php
			while($row=mysqli_fetch_assoc($res)){
			?>
				<li>
			<?php 
			$tr=$row["name"];
			echo praname($tr)."<br/>";?>
			</li>
			<?php
			}
			
			 ?>
            </ul>
            </div>
          </div>
          <div class="tab-pane fade" id="paneTwo2">
            Registration Fee is &#8377; 500 and you will be provided with T-shirt, ID-card and participation certificate. 
          </div>
          <div class="tab-pane fade" id="paneTwo8">
          <p>CAMPUS DEATILS</p>
          </div>
            
        </div>
  
  </div>
  <div class="col-md-5 box" style="padding-top:3%;padding-bottom:3%">
  <center>
  <img src="../images/svg/businessman.svg" class="img-responsive" alt="technoriti profile"/>
  <div id="table" style="padding-top:2em;">
  <?php if(isset($_SESSION["id"])){ ?>
   	<table>
    	<tr>
        	<td>ID : </td>
            <td><?php echo $_SESSION["id"]; ?></td>
        </tr>
        <tr>
        	<td>USERNAME : </td>
            <td><?php echo $_SESSION["uname"] ?></td>
        </tr>
        <tr>
        	<td>FULL NAME : </td>
            <td> <?php echo $_SESSION["fname"]  ?></td>
        </tr>
        <tr>
        	<td>GENDER : </td>
            <td><?php echo $_SESSION["gender"]  ?></td>
        </tr>
        <tr>
        	<td>EMAIL : </td>
            <td><?php echo $_SESSION["email"]  ?></td>
        </tr>
        <tr>
        	<td>PHONE : </td>
            <td><?php echo $_SESSION["phone"]  ?></td>
        </tr><tr>
        	<td>COLLEGE NAME : </td>
            <td><?php echo  $_SESSION["cname"]  ?></td>
        </tr>
        <tr>
        	<td>BRANCH NAME : </td>
            <td><?php	echo  $_SESSION["bname"]  ?></td>
        </tr>
        <tr>
        	<td>SEMESTER : </td>
            <td><?php	echo  $_SESSION["sem"]  ?></td>
        </tr>
    </table>
    </center>
	<?php }	?> 
    </div>		
  </div>
  </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-1.11.2.min.js"></script>
   

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="../js/bootstrap-3.3.4.js" type="text/javascript"></script>
</body>
</html>
