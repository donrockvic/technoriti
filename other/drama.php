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
</head>
  <style type="text/css">
	body{text-align:justify;
	background-image:url(../images/BL.jpg);
	background-size:cover;
	background-attachment:fixed;
	color:#FFFFFF;}
li > a {color:#FFFFFF;}	
	</style>
  <?php
  function displaybtn(){
	  if(isset($_SESSION["uname"])){
		  echo "<li> <a href=\"../register/details.php\"  >DASHBOARD</a></li>"."<li><a href=\"../register/logout.php\"  >LOGOUT</a></li>";
	  }
	  else{
	    echo "<li><a href=\"../register/register.php\" >SIGN UP</a></li>";	
		echo "<li><a href=\"../register/login.php\" >LOGIN</a></li>";	
	   }
  }
  ?>

  <body style="padding-top:80px; padding-bottom:40px">
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse mera">
  <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="../"><img src="../images/technoriti-logo-boom.png" width="100" height="50" class="img-responsive" alt="TECHNORITI"></a></div>
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
<div class="container-fluid">
<div class="row">
    <center><div class="col-md-12"><font size="+3">Umang Idol: </font></div></center>
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
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">UMANG DRAMA</a></li>
              <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="ramp.php">UMANG ETHNIC WALK</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
  </div>
<div class="row" style="padding-bottom:3%;">
    <center>
    <div class="col-md-12"> <img src="../images/idol.jpg" class="img-responsive" alt="Placeholder image"></div>
    </center>
  </div>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8"> 
    <h3>Idol:</h3>
    RF Drama:
If you think you can you can mesmerize the audience with acting, script, dialogues and sets – then RF DRAMA is your call! Once the stage is set and all is ready – it is show time!
RF DRAMA stage is the platform to express yourself with your talent. Just goes for it!        
<br/>
Note:-
<ol>
<li>	The team size will be minimum of 5 members per team. </li>
<li>	Language of the play can be English/Hindi.</li>
<li>	Microphones and backstage mikes for narration, lights, and a laptop to play sounds will be provided. </li>
<li>	The script can be original or an adaptation.  </li>
<li>	No props will be provided, however teams can use their own props.  </li>
<li>	External music is allowed.  </li>
<li>	The contestants are PROHIBITED to use vulgar words, acts and expressions within their presentation.  </li>
<li>	It is essential that a team should be composed of students from the same Institutes. </li>
</ol>
</div>
<div class="col-md-2"></div>
</div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
	<script src="../js/bootstrap-3.3.4.js" type="text/javascript"></script>
</body>
</html>
