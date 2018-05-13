<?php  require_once("includes/session.php"); ?>
<?php  require_once("includes/functions.php"); ?>
<?php  require_once("includes/validation_functions.php");  ?>
<?php  require_once("includes/db_connection.php");  ?>
<!DOCTYPE html>
<html lang="en">

  <head>

  	<meta name="description" content="Technical Fest of BCE, Bhagalpur">
    <meta name="keywords" content="Technoriti,Technoriti-16,technoriti,techfest bhagalpur,technoriti bhagalpur,BCE technofest,BCE techfest,BCE fest,bce techfest,bce technofest,bhagalpur college of engineering technical fest,parakram,umang">
    <meta name="author" content="Vicky Kumar">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login|Technoriti-16</title>
    <!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
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
 
	body{
	background-image:url(../images/loginbc.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	}
	#box{
		border:2px solid #FFFFFF;
		background-color:#FFFFFF;
		opacity:0.8;
		padding-bottom:5em;
		padding-top:5em;
	}
	
	</style>
</head>
<?php
  function displaybtn(){
	  if(isset($_SESSION["uname"])){
		  echo "<li> <a href=\"details.php\" >DASHBOARD</a></li>"."<li><a href=\"logout.php\"  >LOGOUT</a></li>";
	  }
	  else{
	    echo "<li><a href=\"register.php\"  >SIGN UP</a></li>";	
		echo "<li class=\"active\"><a href=\"#\">LOGIN</a></li>";	
	   }
  }
  ?>
<body >
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#"><img src="../images/technoriti-logo-boom.png" height="60" width="80" alt="logo" /></a></div>
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
<div class="container-fluid" >
  <div class="row" style="margin-top:8%;">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <div class="row col-md-12 col-sm-10 col-xs-12" style="background-color:#3399FF;text-align:center;color:#FFFFFF;">
    <h1>LOGIN</h1>
    </div>
    <div class="row col-md-12 col-sm-10 col-xs-12" id="box">
    <?php
if(isset($_SESSION["uname"])){
	redirect_to("../index.php");
}
if ( isset( $_POST["action"] ) and $_POST["action"] == "login" ) {
	$required_fields=array('username','password');
	validate_presences($required_fields) ;
	
	$final=form_errors($errors);
	
	if($final==""){
		 $username=$_POST["username"];
		 $password=$_POST["password"];
		 $result=attempt_login($username, $password);
		 if(!$result){
			 $msg="no such user found";
			displayForm($msg);
		 }else{
			$_SESSION["id"]=$result["id"];
			$_SESSION["fname"]=$result["fname"];
			$_SESSION["uname"]=$result["uname"];
			$_SESSION["email"]=$result["email"];
			$_SESSION["gender"]=$result["gender"];
			$_SESSION["phone"]=$result["phone"];
			$_SESSION["cname"]=$result["cname"];
			$_SESSION["bname"]=$result["bname"];
			$_SESSION["sem"]=$result["SEM"];
			confirm_logged_in();
			echo $_SESSION["fname"]." you are logged in ..";
			echo "<h3><a href=\"../\">BACK TO MAIN PAGE</a></h3>";
		 }
	}else{
		displayForm($final);
	}
} else {
	$message="<p> To access the members' area, pleas enter your username and password below then click Login. </p>";
 displayForm($message);
}
?>
    </div>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
<?php

function displayForm($message) {
?>
 <?php echo $message; ?>
 
<form action="login.php" method="post" style="margin-bottom: 50px;">
 <div style="width: 30em;">

 <input type="hidden"  name="action"  value="login" />

 <input type="text" name="username" id="username" class="mera" value="" placeholder="USERNAME"/>
 
 <input type="password" name="password" id="password" class="mera" value="" placeholder="PASSWORD" />
 
 <div style="clear: both; margin-top:30px;" >
 <input type="submit" name="submitButton" class="btn btn-primary" value="Login" />
 </div>
 </div>
 </form>
 <a href="forgot.php">Forgot password</a>
   <div style="clear: both;margin-top:20px">
 <a href="register.php"><input type="button" class="btn btn-primary"   value="Register" /></a>
 </div>
<?php } ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-1.11.2.min.js"></script>
   

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="../js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
