<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="description" content="Technical Fest of BCE, Bhagalpur">
    <meta name="keywords" content="Technoriti,Technoriti-16,technoriti,techfest bhagalpur,technoriti bhagalpur,BCE technofest,BCE techfest,BCE fest,bce techfest,bce technofest,bhagalpur college of engineering technical fest,parakram,umang">
    <meta name="author" content="Vicky Kumar">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospitality|Technoriti-16</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	 <link rel="shortcut icon" href="images/technoriti-logo-boom.png" />
     <link rel="stylesheet" type="text/css" href="css/nav.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
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
  <body>
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
        	<li ><a href="sponsors.php">SPONSORS</a></li> 
        	<li class="active"><a href="#">HOSPITALITY</a></li>
          	<?php displaybtn(); ?>

    </ul>
    </div>
    </div>
  </nav>
   <h2 >to be uploaded soon...</h2>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>
