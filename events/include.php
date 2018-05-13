<?php  require_once("../register/includes/session.php"); ?>
<?php
  function displaybtn(){
	  if(isset($_SESSION["uname"])){
		  echo "<li> <a href=\"../register/details.php\">DASHBOARD</a></li>".
		   "<li><a href=\"../register/logout.php\">LOGOUT</a></li>";
	  }
	  else{
	    echo "<li><a href=\"../register/register.php\">SIGN UP</a></li>";	
		echo "<li><a href=\"../register/login.php\">LOGIN</a></li>";	
	   }
  }
  ?>
  <link rel="stylesheet" type="text/css" href="../css/nav.css">
   <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <a class="navbar-brand" href="#"><img src="../images/technoriti-logo-boom.png" height="60" width="80" alt="logo" /></a> </div>
    <div class="collapse navbar-collapse" id="nav1">
    <ul class="nav navbar-nav navbar-left">
    <li><a href="../">HOME</a></li>
    <li class="active"><a href="index.php">EVENTS</a></li>
    <li><a href="../other/parakram.php">PARAKRAM</a></li>
    <li><a href="../other/umang.php">UMANG</a></li>
    <li><a href="../other/alumni.php">SANGAM</a></li>
    <li><a href="../other/pmentors.php">OUR MENTOR</a></li>
    <li><a href="../sponsors.php">SPONSORS</a></li>
    <li><a href="../help.php">HOSPITALITY</a></li>
    <?php displaybtn();?>
    </ul>
    </div>
    </div>
  </nav>