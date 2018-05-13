<?php  require_once("../register/includes/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Cultural Fest of BCE, Bhagalpur">
    <meta name="keywords" content="bce umang,umang">
    <meta name="author" content="Vicky Kumar">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Umang|Technoriti-16</title>
    <!-- Bootstrap -->
	 
	<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../images/technoriti-logo-boom.png" />
    <link rel="stylesheet" type="text/css" href="../css/nav.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
	body{text-align:justify;
	background-image:url(../images/BL.jpg);
	background-size:cover;
	background-attachment:fixed;
	color:#FFFFFF;}
li > a {color:#FFFFFF;}	
	</style>
</head>
  <?php
  function displaybtn(){
	  if(isset($_SESSION["uname"])){
		  echo "<li> <a href=\"../register/details.php\" >DASHBOARD</a></li>"."<li><a href=\"../register/logout.php\" >LOGOUT</a></li>";
	  }
	  else{
	    echo "<li><a href=\"../register/register.php\"  >SIGN UP</a></li>";	
		echo "<li><a href=\"../register/login.php\"  >LOGIN</a></li>";	
	   }
  }
  ?>

<body style="padding-top:70px;">
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse mera">
  <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed btn-default" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="../"><img src="../images/technoriti-logo-boom.png" height="60" width="80" alt="logo"></a></div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar1">
         <ul class="nav navbar-nav">
          <li ><a href="../index.php">HOME</a></li>
          <li><a href="../events/index.php">EVENTS</a></li>
          <li><a href="parakram.php">PARAKRAM</a></li>
          <li class="active"><a href="#">UMANG</a></li>
          <li ><a href="alumni.php">SANGAM</a></li>
          <li><a href="p_mentors.php">OUR MENTOR</a></li> 
          <li><a href="../sponsors.php">SPONSORS</a></li>
          <li><a href="../help.php">HOSPITALITY</a></li>
          <?php displaybtn(); ?>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
  </div>
    <!-- /.container-fluid -->
</nav>

<div class="container-fluid" style="padding-bottom:40px">
<div class="row">
    <center><div class="col-md-12"><font size="+3">Ride on D Ramp</font></div></center>
  </div>
<div class="row">
    <div class="col-md-4">
      <div class="btn-group">
        <button type="button" class="btn dropdown-toggle btn-primary" data-toggle="dropdown" aria-expanded="false">UMANG EVENTS <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="music.php">UMANG MUSIC</a></li>
              <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="dance.php">UMANG DANCE</a></li> 
              <li role="presentation" class="divider"></li>       
          <li role="presentation"><a role="menuitem" tabindex="-1" href="drama.php">UMANG DRAMA</a></li>
              <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">UMANG ETHNIC WALK</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
  </div>
<div class="row" style="padding-bottom:3%;">
    <center>
    <div class="col-md-12"> <img src="../images/rainbowfest-ramp1.jpg" class="img-responsive" alt="Placeholder image"></div>
    </center>
  </div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8"><font size="+1">
    <p> It is fashion that embraces and represents a culture and allows one to celebrate her heritage and origin.
    Ethnic means that something shares the distinctive cultural traits of a group in society. It relates to a group that shares a racial, national, religious, linguistic or religious heritage, regardless of whether the wearer still lives in her country of origin. Ethnicity is the traditional culture of a social group.
    When you dress to reflect your ethnicity, you are celebrating who you are and expressing your cultural roots.  </p>
    <p> Of course, you don’t have to be, for example, an Eastern Indian to dress like one. Those who travel to other countries often find themselves smitten with the fashion of a particular country and are eager to do it themselves because it is so compelling and so very different from what they normally wear.</p>
    <ul>
    <li> To be a best ramp walker every aspirant must learn the basic step before going to the ramp.</li>
    <li> Settle with any type of outfits.</li>
    <li> Have a smooth walk and always keep watching in the bee line.</li>
    <li> Poise yourself when you were on the ramp with high heeled footwear.</li>
    <li> Wag your arms and shoulders but copious.</li>
    <li> Don’t lose out your level of conviction.</li>
    <li> Able to handled your dress pattern that is support to show</li>
    </ul>
    <p>Note: </p>
    <ul>
    <li> The applicant should be a student of a BCE Bhagalpur college.</li>
    <li> Theme for it is: ethnic ramp.</li>
    <li> It is a solo, duet and group event.</li>
    <li> Ramp Walk in "Professional Attires"</li>
    <li> "Team round" where you will be placed in a team and some activity shall be done by each team. </li>
    <li> Vulgarity in any form is strictly not permitted.</li>
    <li> T-shaped extension will be provided on the main stage.</li>
    <li> No props and costumes will be provided by the organizers. Teams have to bring their own costumes and props. Use of materials like candles, fire, cigarettes, alcohol and any hazardous materials on stage is prohibited.</li>
    </ul></font>
    </div>
    <div class="col-md-2"></div>
  </div>


</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
	<script src="../js/bootstrap-3.3.4.js" type="text/javascript"></script>
</body>
</html>
