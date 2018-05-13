<?php  require_once("../register/includes/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Principal of BCE, Bhagalpur">
    <meta name="keywords" content="Technoriti,Technoriti-16,technoriti,techfest bhagalpur,technoriti bhagalpur,BCE technofest,BCE techfest,BCE fest,bce techfest,bce technofest,bhagalpur college of engineering technical fest,parakram,umang,principal BCE,Principal BCE Bhagalpur">
    <meta name="author" content="Vicky Kumar">
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mentor | Technoriti-16</title>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="../images/technoriti-logo-boom.png" />
	<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/nav.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  <script src="../js/jquery-1.11.2.min.js"></script>
        <style type="text/css">
		body{
			background-image:url(../images/bc2.jpg);
			background-attachment:fixed;
			background-size:cover;
		}
			#msg{
		        font-family: 'Satisfy', cursive;
				font-size:larger;
			}	
			#dtl{
				font-family: 'Josefin Sans', sans-serif;
				font-size:larger;
			}
		li > a {color:#FFFFFF};
	 
		</style>
  </head>
  <?php
  function displaybtn(){
	  if(isset($_SESSION["uname"])){
		  echo "<li> <a href=\"../register/details.php\">DASHBOARD</a></li>"."<li><a href=\"../register/logout.php\" >LOGOUT</a></li>";
	  }
	  else{
	    echo "<li><a href=\"../register/register.php\">SIGN UP</a></li>";	
		echo "<li><a href=\"../register/login.php\">LOGIN</a></li>";	
	   }
  }
  ?>

  <body style="padding-top:50px;">
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
          <li><a href="alumni.php">SANGAM</a></li>
          <li class="active"><a href="#">OUR MENTOR</a></li>
       	<li><a href="../sponsors.php">SPONSORS</a></li>
         	<li><a href="../help.php">HOSPITALITY</a></li>
          	<?php displaybtn(); ?>
        </ul>
    </div>
    </div>
  </nav>
 
  <div class="container-fluid" style="padding-top:3%" >
<div class="row">
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-12"><img src="../images/prince.jpg" class="img-responsive" alt="technoriti mentor" width="60%" height="50%"></div>
        </div>
        <div class="row" style="padding-top:10%">
          <div class="col-md-12">
              <h3>ABOUT THE PRINCIPAL</h3>
              <p><b>PRINCIPAL:BCE BHAGALPUR</b></p>
              <p><b>PHONE:<ul><li>0621 226 2758(work)</li><li>0621 226 265</li></ul></b></p>
              <p><b>EMAIL:<a href="mailto:nirmalmit@rediffmail.com">nirmalmit@rediffmail.com</a></b></p>
          </div>
        </div>
</div>
      <div class="col-md-8" id="dtl">
      <p>
      To accomplish the motto of BCE Bhagalpur,we have a dynamic personality at the helm of affairs : Dr. Nirmal Kumar, who has a rich educational and teaching experience. 
      </p>
      <p>
      He completed his graduation with civil stream from BIT Sindri, Dhanbad. After graduation he did his M. Tech from IIT Delhi. He also completed his PhD thesis from IIT Delhi
      </p>
      <p>
      Along with such a vast educational qualifications, He also has an extreme good teaching career. He was a professor of Muzaffarpur Institute of  Technology, Muzaffarpur from <b>1984-2014.</b>
      </p>
      <p>
      BCE is proud to have the opportunity to flourish under the supervision of such a versatile personality.
      </p>
      
      <b><h3>Messsage From The Desk Of Principal -</h3></b>
      <p id="msg">"On behalf of Bhagalpur College of Engineering, Bhagalpur it is my pleasure to welcome you on the campus. This Institute has been known for its values for more than five decades, and we strive hard to keep up the ethos. In case we have inadvertently slipped somewhere, I offer my sincere apologies. It provides an optimum mix of theory and practical, with strong bias on industrial applications. In more recent years, introduction of modern infrastructure have further improved the programme. While the depth of training in engineering subjects is unquestioned, the spam of our curriculum is often overlooked. By virtue of their unrattled spirits, the BCE graduates have aspiration to learn and grow across departmental boundaries and excel in extra curricular activities. You will be provided each and every necessary resource for your recruitment process on our campus. I am sure our students will deliver with due diligence. Looking forward to your enduring and continuing relationship and support for the Institute."</p>
    </div>
    </div>
<div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
      
      </div>
    </div>
</div>
  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="../js/bootstrap-3.3.4.js" type="text/javascript"></script>
</body>
</html>