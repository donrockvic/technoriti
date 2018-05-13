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
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
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
	    echo "<li><a href=\"../register/register.php\" >SIGN UP</a></li>";	
		echo "<li><a href=\"../register/login.php\" >LOGIN</a></li>";	
	   }
  }
  ?>

  <body style="padding-top:70px;" style="padding-bottom:40px">
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse mera">
  <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
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

<div class="container-fluid">
<div class="row">
    <center><div class="col-md-12"><font size="+3">Umang Idol: </font></div></center>
  </div>
<div class="row">
    <div class="col-md-4">
      <div class="btn-group">
        <button type="button" class="btn dropdown-toggle btn-primary" data-toggle="dropdown" aria-expanded="false">UMANG EVENTS <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">UMANG MUSIC</a></li>
              <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="dance.php">UMANG DANCE</a></li> 
              <li role="presentation" class="divider"></li>       
          <li role="presentation"><a role="menuitem" tabindex="-1" href="drama.php">UMANG DRAMA</a></li>
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
 <p>Get ready to unveil the singer within you as Rainbow Fest presents RF Idol, the solo singing competition through which the talented singers from across the state take a shot to fame. From folk to filmy songs, the stage is set for you to mesmerize the audience and win exciting prizes.</p>
<p>Prelims:</p>
<ol>
	<li>Participants can sing a song (in Hindi or English or both) and it can be a movie song, an album song, or his/her original composition. 
</li><li>
	The time of performance should be at max 3 minutes. 
</li><li>
	Participants have to bring sound tracks in CD/pen drive and submit the tracks at the beginning of the prelims. 
</li></ol>
<p>Finals:</p>
<ol><li>
	Participants need to perform a single song (in Hindi, English or both), the soundtrack for which they will submit to the Organizing Committee prior to the event in readable CD/pen drive. 
</li><li>
	This is strictly a solo event and no accompanists or backing vocals are allowed. 
</li><li>
	Performers will be disqualified on the spot for Misconduct, Obscenity or foul language.. 
</li></ol>
<p>	Judging Criteria </p>
<ul><li>
	Quality of voice </li>
<li>
	Sense of scale and beat </li>
<li>
	Quality of rendition </li>
<li>
	Improvisation </li>
<li>
	Pronunciation of lyrics </li>
<li>
	Mood and expression </li>
<li>
	Overall impact </li>
<p>
	The decision of the judges and the coordinators shall be final and binding in all cases. </p>
</ul>
  
<h3> Karaoke: </h3><p>
	This is a karaoke event. 

	Professionals from a karaoke singing portal will be conducting the event with the help of their karaoke software. 
</p><ol><li>
	The music for the selected song would be provided by the organizers.</li>
	<li>Performance time will 5 minutes. </li>
	<li>Maximum two vocalists are allowed for this event.</li>

 
<h3> Musibuzz:</h3><p>
It is the most prestigious rock band competition of the groups of band of college students, the event is organized by Bce Bhagalpur. Background beat i.e. music is provided by orchestra of management team of college.
</p><p>Note:-</p><ol>
	<li>The team size will be minimum of 3 members per team. </li>
<li>	Maximum number of participants per team is 5.</li>
	<li>All the essential equipments are provided by management team of college itself.</li>
<li>	Performers can perform on the songs of famous artist or the recorded songs or self composed track.</li>
<li>	High quality mic system and speakers are provided by management team of college.</li>
</ol>


    </div>
     <div class="col-md-2"></div>
 
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
	<script src="../js/bootstrap-3.3.4.js" type="text/javascript"></script>
</body>
</html>
