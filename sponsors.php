<?php require_once("register/includes/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="description" content="Technical Fest of BCE, Bhagalpur">
    <meta name="keywords" content="Technoriti,Technoriti-16,technoriti,techfest bhagalpur,technoriti bhagalpur,BCE technofest,BCE techfest,BCE fest,bce techfest,bce technofest,bhagalpur college of engineering technical fest,parakram,umang">
    <meta name="author" content="Technoriti">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sponsors|Technoriti-16</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="images/technoriti-logo-boom.png" />
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  
<style type="text/css">
	body{text-align:center;}
	.row{margin-top:1em;margin-bottom:1.5em;}
	
	.dtl{
		 -moz-box-shadow: 5px 5px 5px #777777;
-webkit-box-shadow: 5px 5px 5px #777777;
box-shadow: 5px 5px 5px #777777;
	}
	 	
</style>
</head>
<?php
  function displaybtn(){
	  if(isset($_SESSION["uname"])){
		  echo  "<li> <a href=\"register/details.php\" >DASHBOARD</a></li>".
		   "<li><a href=\"register/logout.php\" >LOGOUT</a></li>";
	  }
	  else{
	    echo "<li><a href=\"register/register.php\" >REGISTER</a></li>";	
		echo "<li><a href=\"register/login.php\" >LOGIN</a></li>";	
	   }
  }
  ?>
<body style="padding-top: 70px;" >
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <a class="navbar-brand" href="#"><img src="images/technoriti-logo-boom.png" height="60" width="80" alt="logo" /></a> </div>
    <div class="collapse navbar-collapse" id="nav1">
    <ul class="nav navbar-nav navbar-left">
          <li ><a href="index.php">HOME</a></li>
          <li><a href="events/index.php">EVENTS</a></li>
          <li><a href="other/parakram.php">PARAKRAM</a></li>
          <li><a href="other/umang.php">UMANG</a></li>
          <li><a href="other/alumni.php">SANGAM</a></li>
          <li><a href="other/pmentors.php">OUR MENTOR</a></li> 
        	<li class="active"><a href="#">SPONSORS</a></li> 
        	<li><a href="help.php">HOSPITALITY</a></li>
          	<?php displaybtn(); ?>

    </ul>
    </div>
    </div>
  </nav>
 
<div class="container-fluid" >
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 "><h4 class=" ">FOR ANY SPONSORSHIP DETAILS, PLEASE CONTACT...</h4></div>
    <div class="col-md-1"></div>
  </div>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3 dtl"><h4>Shubham Gupta</h4><p>shubhamgupta887@gmail.com</p><p>7277687550</p></div>
    <div class="col-md-3 dtl"><h4>Mohit Suman</h4><p>tiwarimohit291@gmail.com</p><p>9006536599</p></div>
    <div class="col-md-3 dtl"><h4>Sri Ram</h4><p>shanujha985@gmail.com</p><p>8651184444</p></div>
    <div class="col-md-1"></div>
  </div>
   <div class="row"><div class="col-md-8 col-md-offset-2"><h3 class=" ">OUR PARTNERS</h3></div></div>
  <div class="row"><div class="col-md-8 col-md-offset-2"><h3 class=" ">ONLINE MESSAGING PARTNER</h3></div></div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><center><a href="https://msg91.com/startups/?utm_source=startup-banner"><img src="https://msg91.com/images/startups/msg91Badge.png" width="120" height="90" title="MSG91 - SMS for Startups" alt="Bulk SMS - MSG91"></a></center></div>
  </div>
  <div class="row"><div class="col-md-8 col-md-offset-2"><h3 class=" ">MEDIA PARTNER</h3></div></div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><center><img src="images/sponsors/Dainik Bhaskar Logo.jpg" class="img-responsive" alt="Dainik Bhaskar"></center></div>
  </div>
   <div class="row"><div class="col-md-8 col-md-offset-2  "><h3>RADIO PARTNER</h3></div></div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><center><img src="images/sponsors/01.jpg" class="img-responsive" alt="RADIO ACTIVE"></center></div>
  <div class="row"><div class="col-md-8 col-md-offset-2"><h3 class=" ">OUR PREVIOUS PARTNERS</h3></div></div>
  <div class="row"><div class="col-md-8 col-md-offset-2"><h3 class=" ">TITLE SPONSOR</h3></div></div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><center><img src="images/sponsors/mentors.jpg" class="img-responsive" alt="MENTORS"></center></div>
  </div>
  <div class="row"><div class="col-md-8 col-md-offset-2"><h3 class=" ">MAJOR SPONSOR</h3></div></div>
  <div class="row">
    <div class="col-md-5 col-md-offset-1"><center><img src="images/sponsors/gate.jpg" class="img-responsive" alt="GATE ACEDEMY"></center></div>
    <div class="col-md-5 col-md-offset-0"><center><img src="images/sponsors/uco.jpg" class="img-responsive" alt="UCO BANK"></center></div>
  </div>
  <div class="row"><div class="col-md-8 col-md-offset-2"><h3 class=" ">MEDIA PARTNER</h3></div></div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><center><img src="images/sponsors/news.jpg" class="img-responsive" alt="PRABHAT KHABAR"></center></div>
  </div>
  <div class="row"><div class="col-md-8 col-md-offset-2 "><h3>WORKSHOP PARTNER</h3></div></div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><center><img src="images/sponsors/workshop.jpg" class="img-responsive" alt="AKLABHAYA INOVATION"></center></div>
  </div>
  <div class="row"><div class="col-md-8 col-md-offset-2  "><h3>HOSPITALITY PARTNER</h3></div></div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><center><img src="images/sponsors/help.jpg" class="img-responsive" alt="JIVAN JAL"></center></div>
  </div>
  <div class="row"><div class="col-md-8 col-md-offset-2  "><h3>RADIO PARTNER</h3></div></div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><center><img src="images/sponsors/radio.jpg" class="img-responsive" alt="RADIO ACTIVE"></center></div>
  </div>
  <div class="row"><div class="col-md-8 col-md-offset-2  "><h3>WEB PARTNER</h3></div></div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><center><img src="images/sponsors/web.jpg" class="img-responsive" alt="MENTORS"></center></div>
  </div>
  <div class="row"><div class="col-md-8 col-md-offset-2 "><h3>ACCESSORIES PARTNER</h3></div></div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><center><img src="images/sponsors/raj.jpg" class="img-responsive" alt="MENTORS"></center></div>
  </div>
</div>

<script src="js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap-3.3.4.js" type="text/javascript"></script>
</body>
</html>
