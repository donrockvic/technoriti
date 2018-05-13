<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta name="description" content="Technical Fest of BCE, Bhagalpur">
    <meta name="keywords" content="Technoriti,Technoriti-16,technoriti,techfest bhagalpur,technoriti bhagalpur,BCE technofest,BCE techfest,BCE fest,bce techfest,bce technofest,bhagalpur college of engineering technical fest,parakram,umang">
    <meta name="author" content="Vicky Kumar">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logout|Technoriti-16</title>
    <!-- Bootstrap -->
	<!-- <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
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
	.mera{margin-top:2em;margin-left:1em; display:block;background-color:transparent;border:none;border-bottom:2px solid #3D3A3A;
  font-size: 1.5em;width:80%;height:15%;border-radius:10px;padding-left:1em;}
	.submitButton{
		background-color:#3399FF;
		height:40px;
		width:40%;
		margin-top:2em;
		margin-left:1em;
		border-radius:10px
	}
	body{
	background-image:url(../images/loginbc.jpg);
	background-size: cover;
	background-attachment:fixed;
	}
	#box{
		border:2px solid #FFFFFF;
		background-color:#FFFFFF;
		opacity:0.8;
		padding-bottom:5em;
		padding-top:5em;
	}
	.de{
		border:1px solid #000000;}
	@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 480px) {
   	.de{
		position:absolute;
		width:200px;
		height:300px;
		left:50px;
		top:100px;background-color: transparent;opacity:0.8;text-align:center;padding:0.5em;margin:1em;	 -moz-box-shadow: 10px 10px 10px #777777;-webkit-box-shadow: 10px 10px 10px #777777;box-shadow: 10px 10px 10px #777777;
	}
  }
  @media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) {
	 	.de{
		 position:absolute; width:1000px;height:250px;top:150px;left:200px;background-color: transparent;opacity:0.8;text-align:center;padding:0.5em;margin:1em;	 -moz-box-shadow: 10px 10px 10px #777777;-webkit-box-shadow: 10px 10px 10px #777777;box-shadow: 10px 10px 10px #777777;
	}
}
@media only screen 
and (min-width : 1224px) {
	 .de{
		 position:absolute; width:1000px;height:250px;top:150px;left:200px;background-color: transparent;opacity:0.8;text-align:center;padding:0.5em;margin:1em;	 -moz-box-shadow: 10px 10px 10px #777777;-webkit-box-shadow: 10px 10px 10px #777777;box-shadow: 10px 10px 10px #777777;
	}
	
}
	
</style>
</head>
<?php
  function displaybtn(){
	echo "<li><a href=\"register.php\">SIGN UP</a></li>";	
	echo "<li class=\"active\"><a href=\"login.php\">LOGIN</a></li>";	
  }
  ?>
<body style="padding-top:50px;" >
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
   <a class="navbar-brand" href="#"><img src="../images/technoriti-logo-boom.png" height="60" width="80" alt="logo" /></a> </div>
   <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar1">
        <ul class="nav navbar-nav">
          <li><a href="../">HOME</a></li>
          <li><a href="../events">EVENTS</a></li>
          <li><a href="../other/parakram.php">PARAKRAM</a></li>
          <li><a href="../other/umang.php">UMANG</a></li>
          <li><a href="../other/alumni.php">SANGAM</a></li>
          <li><a href="../other/pmentors.php">OUR MENTOR</a></li> 
        	<li><a href="../sponsors.php">SPONSORS</a></li>
        	<li><a href="../help.php">HOSPITALITY</a></li>
          	<?php displaybtn(); ?>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
 
 <div class="container-fluid row de" style="padding-top:5%">
 <div class="col-md-4"></div>
 <div class="col-md-4"><?php
	// v1: simple logout
	// session_start();
	$_SESSION["id"] = null;
	$_SESSION["uname"] = null;
	$last=$_SERVER['HTTP_REFERER'];
	echo "<h4>YOU ARE LOGGED OUT</h4>"."<br/>";
	echo "<h3><a href=\"../\">BACK TO HOMEPAGE</a></h3>";
	 
?></div>
 <div class="col-md-4"></div>
 </div>
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-1.11.2.min.js"></script>
   

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<!-- <script src="../js/bootstrap.js" type="text/javascript"></script> -->
<script src="../js/bootstrap-3.3.4.js" type="text/javascript"></script>
</body>
</html>






