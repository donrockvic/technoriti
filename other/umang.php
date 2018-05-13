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
	<link href="other.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="shortcut icon" href="../images/technoriti-logo-boom.png" />
    <link href="../css/must.css" rel="stylesheet" type="text/css" >
	<link href="../css/nav.css" rel="stylesheet" type="text/css"  >
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <style type="text/css">
			.mera{
				align-content:center;	
			}
			.dtle{
				font-size:larger;
			}
			
			#know{
				background-color:#191818;
				background-image:url(../images/Bl.jpg);
				background-size:cover;
			} 
li > a {color:#FFFFFF;}	
		</style>
  </head>
  <?php
  function displaybtn(){
	  if(isset($_SESSION["uname"])){
		  echo "<li> <a href=\"../register/details.php\" role=\"button\" class=\"btn glass\">DASHBOARD</a></li>"."<li><a href=\"../register/logout.php\" role=\"button\" class=\"btn glass\" >LOGOUT</a></li>";
	  }
	  else{
	    echo "<li><a href=\"../register/register.php\" role=\"button\" class=\"btn glass\" >SIGN UP</a></li>";	
		echo "<li><a href=\"../register/login.php\" role=\"button\" class=\"btn glass\" >LOGIN</a></li>";	
	   }
  }
  ?>

  <body style="padding-top:0px;">
  
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <a class="navbar-brand" href="#"><img src="../images/technoriti-logo-boom.png" height="60" width="80" alt="logo" /></a> </div>
    <div class="collapse navbar-collapse" id="nav1">
    <ul class="nav navbar-nav">
          <li ><a href="../index.php">HOME</a></li>
          <li><a href="../events/index.php">EVENTS</a></li>
          <li><a href="parakram.php">PARAKRAM</a></li>
          <li class="active"><a href="#">UMANG</a></li>
          <li ><a href="alumni.php">SANGAM</a></li>
          <li><a href="pmentors.php">OUR MENTOR</a></li> 
        	<li><a href="../sponsors.php">SPONSORS</a></li> 
        	<li><a href="../help.php">HOSPITALITY</a></li>
          	<?php displaybtn(); ?>
        </ul>
    </div>
    </div>
  </nav>
  
  <header class="container-fluid body">
    <div class="row">
      <div class="col-md-8 col-md-offset-2  make"><img class="img-responsive" src="../images/umang.png"/></div>
    </div>
    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6"><h3 style="color:#FFFFFF;"> - Cultural Night</h3></div>
    </div>
       
    <div class="row" style="padding-top:1%;padding-bottom:3%;">
     <div class="intro-scroller">
				<a class="inner-link" href="#know">
					<div class="mouse-icon" style="opacity: 1;">
						<div class="wheel"></div>
					</div>
				</a> 
			</div>  
    </div>
</header>
    <div class="container-fluid boxu" id="know" style="color:#FFFFFF;padding-top:100px">
    <div class="row">
        <div class="col-md-3 col-md-offset-1" >
        	<center><h2>UMANG</h2></center>
            <p class="dtle" style="text-align:justify">
           UMANG is the annual cultural day of Bhagalpur College of Engineering. On this day cultural confluence with technological mindset occurs and provides enthralling delight to the soul. As we believe that technology will always remain debited towards culture for providing ethics, we put our creative skills on the forefront through fashion, dance, drama, documentary and music. </p>
        </div>
        <div class="col-md-7 col-md-push-1 ">
            <div class="row">
            	<div class="col-md-12" style="color:#FFFFFF;"><center><h2>OUE EVENTS</h2></center></div>
            </div>
            <div class="row">
            	<div class="row" style="margin-top:0.5em;"> 
               <a href="music.php"><div id="mpe" class="col-md-5 col-md-push-1">
              <center><img src="../images/rainbowfest-music.jpg" class="img-responsive" height="500em" width="300em"  alt="image" /></center><h2 >MUSIC</h2>
              </div></a>
               <a href="dance.php"><div id="mpe" class="col-md-5 col-md-push-1">
        <center><img src="../images/rainbowfest-dance1.jpg" class="img-responsive" height="500em" width="300em"  alt="image" /></center><h2 >DANCE</h2></div>
           </a> 
            </div>
         	    <div class="row" style="margin-top:0.5em;">
                <a href="drama.php">
        <div id="mpe" class="col-md-5 col-md-push-1">
        <center>
        <img src="../images/rainbowfest-drama.jpg" class="img-responsive" height="500em" width="300em"  alt="image" />
        </center>
        <h2 >DRAMA</h2>
        </div>
      </a> 
                <a href="ramp.php"><div id="mpe" class="col-md-5 col-md-push-1">
      <center><img src="../images/rainbowfest-ramp1.jpg" class="img-responsive" height="500em" width="300em"  alt="image" /></center><h2 >FASHION</h2></div>
            </a>
            </div>
            </div>       		
        </div>
      </div>
   
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
	<script src="../js/bootstrap-3.3.4.js" type="text/javascript"></script>
 
</body>
</html>