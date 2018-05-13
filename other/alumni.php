<?php  require_once("../register/includes/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Principal of BCE, Bhagalpur">
    <meta name="keywords" content="Sangam,Technoriti,Technoriti-16,technoriti,techfest bhagalpur,technoriti bhagalpur,BCE technofest,BCE techfest,BCE fest,bce techfest,bce technofest,bhagalpur college of engineering technical fest,parakram,umang,principal BCE,Principal BCE Bhagalpur">
    <meta name="author" content="Vicky Kumar">
    <meta charset="UTF-8"
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sangam | Technoriti-16</title>
    <!-- Bootstrap -->
	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="other.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="shortcut icon" href="../images/technoriti-logo-boom.png" />
        <link href="../css/nav.css" rel="stylesheet" type="text/css"  >
    <link href="../css/must.css" rel="stylesheet" type="text/css" >
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <style type="text/css">
		  #know{background-image:url(../images/alumni.jpg);
		  background-size:cover;
		  color:#000000;}
		  .body{background: #333;background-image:url('../images/sangam.jpg');background-size: cover;overflow:hidden;background-attachment:fixed;padding-top:22%;}

		.fig{
			paddding-left:1em;
		} 
li > a {color:#FFFFFF;	}
		.dtl{
			font-family: 'Quicksand', sans-serif;
			font-size:larger;
			color:#000000;
		}
		</style>
  </head>
  <body style="padding-bottom:40px">
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
          <li><a href="umang.php">UMANG</a></li>
          <li class="active"><a href="alumni.php">SANGAM</a></li>
          <li><a href="pmentors.php">OUR MENTOR</a></li> 
        	<li><a href="../sponsors.php">SPONSORS</a></li> 
        	<li><a href="../help.php">HOSPITALITY</a></li>
          	 <li><a href="https://docs.google.com/forms/d/1ALsgTNPmbb25FFJs0PWcTKshU3XJIGwUESrVieRtV-A/viewform?c=0&w=1" class="btn btn-primary glass">ALUMNI REGISTRATION</a></li>
        </ul>
    </div>
    </div>
  </nav>

  
  <header class="container-fluid body">
    <div class="row">
      <div class="col-md-7 col-md-push-2 make"><img class="img-responsive" src="../images/sangam.png"/></div>
    </div>
    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6"><h2 style="color:#000000;"> -The Alumni Meet</h3></div>
    </div>
    <div class="row">
     <div class="intro-scroller">
				<a class="inner-link" href="#know">
					<div class="mouse-icon" style="opacity: 1;">
						<div class="wheel"></div>
					</div>
				</a> 
			</div>  
    </div>
</header>
  
  <div class="container-fluid" id="know" style="padding-top:100px" > 
    <div class="row" style="padding-bottom:5em;">
      <div class="col-md-6">
 	     <img class="img-responsive" id="img" width="100%" alt="img1" height="100%" src="../images/fest/DSC_4370.JPG" />      </div>
      <div class="col-md-6 dtl" style="color:#FFFFFF;">
      	<p>
      		Welcome to the alumni section of Bhagalpur College of Engineering, Bhagalpur. If you are a passout BCEian, this is the place to stay in touch with your alma mater.   
        </p>
        <p>
        	BCE is and has been home to numerous students hailing from different places, fully under the same roof for four years. These years make us what we become tomorrow. After we say good bye to the place where are fondest experiences have been, the place that has molded us, the place we have loved and also hated at times, What remains are just the <b>Memories..</b> 
        </p>
        <p>so we have taken a step towards you so that you can make a comeback, to your past, revel in the glory of your college life and reconnect with your friends, seniors and juniors</p>
        <p>
        The support of alumni is very important for our continued succss. We hope you enjoyed your online visit and we look forward to see you in campus soon..</p>
      
      </div>
</div>
 <script type="text/javascript" >
		var myImages = ["../images/fest/DSC_4295.JPG","../images/fest/DSC_4370.JPG","../images/fest/DSC_5515.JPG","../images/fest/DSC_5704.JPG","../images/fest/DSC_5710.JPG"];
		 var obj=document.getElementById("img");
		 function changeImg() {
			var newImgNumber = Math.round(Math.random() * 4);
			while (obj.src.indexOf(myImages[newImgNumber]) != -1) {
				newImgNumber = Math.round(Math.random() * 4);
			}
			obj.src = myImages[newImgNumber];
		 }
		setInterval(changeImg, 3000);
		</script>
<div class="row" style="padding-bottom:2em;">
      <div class="col-md-4 fig"><img src="../images/fest/Capture1.PNG" class="img-responsive" alt="technoriti sangam"></div>
      <div class="col-md-4 fig"><img src="../images/fest/Capture2.PNG" class="img-responsive" alt="technoriti sangam"></div>
      <div class="col-md-4 fig"><img src="../images/fest/Capture3.PNG" class="img-responsive" alt="technoriti sangam"></div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>