<?php ob_start(); ?>
<?php  require_once("../register/includes/session.php"); ?>
<?php include("../register/includes/functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta name="description" content="Technical Fest of BCE, Bhagalpur">
    <meta name="keywords" content="Technoriti,Technoriti-16,bhagalpur college of engineering technical fest,parakram">
    <meta name="author" content="Technoriti">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parakram | Technoriti-16</title>
    <!-- Bootstrap -->
    <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
	<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="../images/technoriti-logo-boom.png" />
    <link rel="stylesheet" type="text/css" href="../css/nav.css">
    <link rel="stylesheet" type="text/css" href="../css/must.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <style type="text/css">
		.body{background: #333;background-image:url('../images/parakram.jpg');background-size: cover;		background-attachment:fixed;overflow:hidden;padding-bottom:15%;	padding-top:5%;height:100%;}
		.fig{paddding-left:1em;	}
		BODY{color:#FFFFFF;text-align:justify;}
.make{position:relative}	

@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
/* Styles */
  .pd{font-size:10px}
  .sm{padding-left:20em;font-size:10px}
}
  /* Smartphones (landscape) ----------- */
@media only screen and (min-width : 321px) {
/* Styles */ .make{
	  margin-top:200px;
  }
}

/* Smartphones (portrait) ----------- */
@media only screen and (max-width : 320px) {
/* Styles */ .make > img{
	  margin-top:200px;
  }
}

  @media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) {
	.sm{font-size:xx-large}
}
@media only screen 
and (min-width : 1224px) {
	.sm{font-size:xx-large}
	
}
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

  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <a class="navbar-brand" href="#"><img src="../images/technoriti-logo-boom.png" height="60" width="80" alt="logo" /></a> </div>
    <div class="collapse navbar-collapse" id="nav1">
    <ul class="nav navbar-nav navbar-left">
  <li ><a href="../index.php">HOME</a></li>
          <li><a href="../events/index.php">EVENTS</a></li>
          <li class="active"><a href="#">PARAKRAM</a></li>
          <li><a href="umang.php">UMANG</a></li>
          <li ><a href="alumni.php">SANGAM</a></li>
          <li><a href="pmentors.php">OUR MENTOR</a></li>
        	<li><a href="../sponsors.php">SPONSORS</a></li> 
        	<li><a href="../help.php">HOSPITALITY</a></li>
          	<?php displaybtn(); ?>
        </ul>
    </div>
    </div>
  </nav>
 
        
  <div class="container-fluid body">
    <header class="row " >
      <center><div class="col-md-12 make"><img src="../images/parakram.png" class="img-responsive" alt="Parakram image"></div></center>
      
    </header>
    <div class="row">
      <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6 sm" style="color:#000000;"><h2>-Sports meet</h2></div>
    </div>
    <div class="row" style="padding-top:5%;padding-left:10%">
      <?php
      
	  	if(isset($_POST["action"]) && $_POST["action"]=="submit"){
			if(isset($_SESSION["uname"])){
				redirect_to("../register/parakramreg.php");
			}
			else{
				
				redirect_to("../register/login.php");
			}
		}
	  
	  ?>
      <div class="col-md-4 ">
      	<form action="parakram.php" method="post" style="margin-bottom: 50px;">
        	<input type="hidden" name="action"  value="submit" />
        	<input type="submit" class="btn btn-primary" value="GET REGISTERED">
        </form>
      </div>
     <div class="col-md-4 "></div>
      <div class="col-md-4"><a href="../documents/ssp.pdf" class="btn btn-primary">GET OUR SHEDULE</a></div>
    </div> 
    <div class="intro-scroller">
				<a class="inner-link" href="#know">
					<div class="mouse-icon" style="opacity: 1;">
						<div class="wheel"></div>
					</div>
				</a> 
			</div> 
  </div>
  
    <div class="container-fluid" id="know" style=" background-image:url(../images/Bl.jpg); background-size:cover;" >
<div class="row" style="padding-top:5%;">
        <center><div class="col-md-12" style="font-size:xx-large">ABOUT PARAKRAM</div></center>
</div>
<div class="row pd">
        <div class="col-md-10 col-md-offset-1" style="padding-top:2%;">PARAKRAM is the annual sports and athletics meet of Bhagalpur College of Engineering, Bhagalpur. It is a delightful sporting event with a motto to achieve teamwork spirit and physical fitness along with strategic decision making capability. We believe that holistic development of a person is the need of the hour for corporate leadership and it can be achieved only if sports is made a part and parcel of engineering students' life style. Parakram is the showcase of our realisation of the aforesaid facts. Parakram includes sports like Cricket, Volleyball, Football, Badminton, Chess and various track and tield events from athletics.</div>
      </div>
      <div class="row" style="padding-top:5%;">
        <center><div class="col-md-12" style="font-size:xx-large">OUR EVENTS</div></center>
</div>
<div class="row" style="padding-top:2%;">
        <div class="col-md-4" >
        <center>
        <font size="+2">CRICKET</font> <img src="../images/P4.jpg" id="im4" class="img-responsive" alt="Parakram cricket" width="70%" height="70%">
        <div class="hidden" id="mi4" style="background-color: transparent; background-repeat:no-repeat;padding:5%;color:#FFFFFF;">
        <P>OUR SHEDULE</P>
        <table>
            <tr>
             
                <th>DATE</th>
                <th>01 -03-16</th>
                  
            </tr>
            <tr>
                <th>9:00 AM-12:00PM :</th>
                 <th>Final year “B” Vs 3rd year “B”</th>
            </tr>
            <tr>
                <th>01:30PM-4:30PM :</th>
                 <th>Final year “A” Vs 3rd Year “A”</th>
            </tr>
          
             <tr>
                <th>DATE</th>
                <th>02-03-16</th>
                  
            </tr>
             <tr>
                <th>9:00 AM-12:00PM :</th>
                 <th> 3RD year ”B” Vs 2nd year ”B”</th>
            </tr>
             <tr>
                <th>01:30PM-4:30PM :</th>
                 <th>3RD year “A” Vs 2nd year “A”</th>
            </tr>
            <tr>
                <th>DATE</th>
                <th>03 -03-16</th>  
            </tr>          
            <tr> 
                <th>9:00 AM-12:00PM</th>
                 <th>FINAL year ”A” Vs 2nd Year ”A”</th>
            </tr>
            <tr>
                <th>1:30PM-4:30PM</th>
                 <th>FINAL year ”B” Vs 2nd Year ”B”</th>
            </tr>
             <tr>
                <th>DATE</th>
                <th>08 -03-16</th>  
            </tr> 
             <tr> 
                <th>9:00 AM-12:00PM</th>
                 <th>CRICKET SEMI-FINAL 1</th>
            </tr>
            <tr>
                <th>1:30PM-4:30PM</th>
                 <th>CRICKET SEMI-FINAL 2</th>
            </tr> 
            <tr>
                <th>DATE</th>
                <th>10 -03-16</th>  
            </tr> 
            <tr> 
                <th>9:00 AM-12:00PM</th>
                 <th>CRICKET FINAL </th>
            </tr> 
        </table>
        <br/>
        <a class="btn btn-primary">GET RULES</a> </div>
        </center>
        </div>
        <script type="text/javascript">
	$(document).ready(function(e) {
        $("#im4").mouseover(function(e) {
            $(this).addClass("hidden");
			$("#mi4").removeClass("hidden");			
        });
		$("#mi4").mouseout(function(e) {
            $(this).addClass("hidden");
			$("#im4").removeClass("hidden");			
        });
    });
	</script>
        <div class="col-md-4">
        <center>
        <font size="+2">FOOTBALL</font> <img src="../images/P2.jpg" id="im2" class="img-responsive" alt="Parakram football" width="70%" height="70%">
        <div class="hidden" id="mi2" style="background-color: transparent; background-repeat:no-repeat;padding:5%;color:#FFFFFF;">
        <P>OUR SHEDULE</P>
        <table>
            <tr>
             
                <th>DATE</th>
                <th>04 -03-16</th>
                  
            </tr>
            <tr>
                <th>01:30PM-4:30PM :</th>
                <th>Final year “A” Vs 3rd year “A”</th>
            </tr>
          <tr>
          		<th></th>
                <th>Final year ”B” Vs 3rd Year “B”</th> 
          </tr>
             <tr>
                <th>DATE</th>
                <th>05-03-16</th>
                  
            </tr>
             <tr>
                <th>01:30PM-4:30PM :</th>
                <th>Final year ”A” Vs 2nd year ”A”</th>
            </tr>
            <tr>
            	<th></th>
                <th> Final year ”B” Vs 2nd year ”B”</th>
            </tr>
            <tr>
                <th>DATE</th>
                <th>07 -03-16</th>  
            </tr>         
            <tr>
                <th>1:30PM-4:30PM</th>
                <th>3rd year ”A” Vs 2nd Year ”A”</th>
            </tr>
            <tr>
            	<th></th>
                <th>3rd year ”B” Vs 2nd Year ”B”</th>
            </tr>
             <tr>
                <th>DATE</th>
                <th>09 -03-16</th>  
            </tr>
            <tr>
                <th>1:30PM-4:30PM</th>
                <th>FOOTBALL SEMIFINAL-1</th>                 
            </tr> 
            <tr>
            <th></th>
            <th>FOOTBALL SEMIFINAL-2</th>
            </tr>
            <tr>
                <th>DATE</th>
                <th>10 -03-16</th>  
            </tr> 
            <tr> 
                <th>1:30PM-4:30PM</th>
                 <th>FOOTBALL FINAL </th>
            </tr> 
        </table>
        <br/>
        <a class="btn btn-primary">GET RULES</a> </div>
        </center>
        </div>
        <script type="text/javascript">
	$(document).ready(function(e) {
        $("#im2").mouseover(function(e) {
            $(this).addClass("hidden");
			$("#mi2").removeClass("hidden");			
        });
		$("#mi2").mouseout(function(e) {
            $(this).addClass("hidden");
			$("#im2").removeClass("hidden");			
        });
    });
	</script>
    	<div class="col-md-4">
        <center>
        <font size="+2">BADMINTON</font> <img src="../images/P3.jpg" id="im3" class="img-responsive" alt="Prakram Badminton" width="70%" height="70%">
        <div class="hidden" id="mi3" style="background-color: transparent; background-repeat:no-repeat;padding:5%;color:#FFFFFF;">
        <P>OUR SHEDULE</P>
     	<table>
        	<tr>
            	<th>DATE</th>
            	<th>04-03-16</th>
            </tr>
            <tr>
            	<th>5:00PM-8:00PM :</th>
                <th>QUALIFYING ROUND ( FINAL YEAR)</th>
            </tr>
            <tr>
            	<th>DATE</th>
            	<th>05-03-16</th>
            </tr>
            <tr>
            	<th>5:00PM-8:00PM :</th>
            	 <th>QUALIFYING ROUND ( 2<sup>nd</sup> YEAR)</th>
            </tr>
             <tr>
            	<th>DATE</th>
            	<th>07-03-16</th>
            </tr>
            <tr>
            	<th>5:00PM-8:00PM :</th>
            	 <th>QUALIFYING ROUND ( 3<sup>rd</sup> YEAR)</th>
            </tr>
             <tr>
            	<th>DATE</th>
            	<th>08-03-16</th>
            </tr>
            <tr>
            	<th>5:00PM-8:00PM :</th>
            	 <th>SEMIFINAL + FINAL</th>
            </tr>
        </table>
          <p><b>GIRLS</b></p>
            <table>
            	<tr>
                	<th>DATE</th>
                    <th>01-03-16</th>
                </tr>
                <tr>
                	<th>9:00 AM-12:00PM :</th>
                    <th>1<sup>st</sup> Day Badminton</sup>
                </tr>
                <tr>
                	<th>1:30PM-4:30PM</th>
                    <th>1<sup>st</sup> Day Badminton</th>
                </tr>
                 <tr>
                	<th>DATE</th>
                    <th>02-03-16</th>
                </tr>
                <tr>
                	<th>9:00 AM-12:00PM :</th>
                    <th>2<sup>nd</sup> Day Badminton</sup>
                </tr>
                <tr>
                	<th>1:30PM-4:30PM</th>
                    <th>2<sup>nd</sup> Day Badminton</th>
                </tr>
            </table>
            <br/>
        <a class="btn btn-primary">GET RULES</a> </div>
        </center>
        </div>
    	<script type="text/javascript">
	$(document).ready(function(e) {
        $("#im3").mouseover(function(e) {
            $(this).addClass("hidden");
			$("#mi3").removeClass("hidden");			
        });
		$("#mi3").mouseout(function(e) {
            $(this).addClass("hidden");
			$("#im3").removeClass("hidden");			
        });
    });
	</script>
        </div>
    <div class="row" style="padding-top:5%;padding-bottom:5%;">
    
    <div class="col-md-4" >
    	 <center>
    	<font size="+2">VOLLEYBALL</font>
  		<img src="../images/P6.jpg" id="im6" class="img-responsive" alt="Parakram volleyball" width="70%" height="70%">
        <div class="hidden" id="mi6" style="background-color: transparent; background-repeat:no-repeat;padding:5%;color:#FFFFFF;">
        	<P>OUR SHEDULE</P>
            <table>
            <tr>
             
                <th>DATE</th>
                <th>04 -03-16</th>
                  
            </tr>
            <tr>
                <th>9:00 AM-12:00PM :</th>
                <th>Final year “A” Vs 3rd year “A”</th>
            </tr>
          <tr>
          		<th></th>
                <th>Final year ”B” Vs 3rd Year “B”</th> 
          </tr>
             <tr>
                <th>DATE</th>
                <th>05-03-16</th>
                  
            </tr>
             <tr>
                <th>9:00 AM-12:00PM :</th>
                <th>Final year ”A” Vs 2nd year ”A”</th>
            </tr>
            <tr>
            	<th></th>
                <th> Final year ”B” Vs 2nd year ”B”</th>
            </tr>
            <tr>
                <th>DATE</th>
                <th>07 -03-16</th>  
            </tr>         
            <tr>
                <th>9:00 AM-12:00PM :</th>
                <th>3rd year ”A” Vs 2nd Year ”A”</th>
            </tr>
            <tr>
            	<th></th>
                <th>3rd year ”B” Vs 2nd Year ”B”</th>
            </tr>
             <tr>
                <th>DATE</th>
                <th>09 -03-16</th>  
            </tr>
            <tr>
                <th>9:00 AM-12:00PM</th>
                <th>VOLLEYBALL SEMIFINAL-1</th>                 
            </tr> 
            <tr>
            <th></th>
            <th>VOLLEYBALL SEMIFINAL-2</th>
            </tr>
            <tr>
                <th>DATE</th>
                <th>10 -03-16</th>  
            </tr> 
            <tr> 
                <th>1:30PM-4:30PM</th>
                 <th>VOLLEYBALL FINAL </th>
            </tr> 
        </table>
        <br/>
            <a class="btn btn-primary">GET RULES</a>
        </div> 
        </center>
    </div>
    <script type="text/javascript">
	$(document).ready(function(e) {
        $("#im6").mouseover(function(e) {
            $(this).addClass("hidden");
			$("#mi6").removeClass("hidden");			
        });
		$("#mi6").mouseout(function(e) {
            $(this).addClass("hidden");
			$("#im6").removeClass("hidden");			
        });
    });
	</script>
  	<div class="col-md-4" >
  		<center>
    	<font size="+2">ATHLETICS</font>
  		<img src="../images/P5.jpg" id="im5" class="img-responsive" alt="Parakram athletics" width="70%" height="70%">
        <div class="hidden" id="mi5" style="background-color: transparent; background-repeat:no-repeat;padding:5%;color:#FFFFFF;">
        	<P>OUR SHEDULE</P>
            <table>
            	<tr>
                	<th>DATE</th>
                    <th>06-03-16</th>
                </tr>
                <tr>
                
                	<th>9:00 AM-12:00PM | 1:30PM-4:30PM</th>
                </tr>
                <tr>
                 <th>ALL ATHLETICS EVENTS </th>
                </tr>
                <tr>
                 <th>(BOYS AND GIRLS) </th>
                </tr>
            </table>
 				<br/>
            <a class="btn btn-primary">GET RULES</a>
        </div> 
        </center>
    </div>
    <script type="text/javascript">
	$(document).ready(function(e) {
        $("#im5").mouseover(function(e) {
            $(this).addClass("hidden");
			$("#mi5").removeClass("hidden");			
        });
		$("#mi5").mouseout(function(e) {
            $(this).addClass("hidden");
			$("#im5").removeClass("hidden");			
        });
    });
	</script>
    <div class="col-md-4">
    	<center>
    	<font size="+2">CHESS</font>
  		<img src="../images/P1.jpg" id="im1" class="img-responsive" alt="Parakram chess" width="70%" height="70%">
        <div class="hidden" id="mi1" style="background-color: transparent; background-repeat:no-repeat;padding:5%;color:#FFFFFF;">
        	<P>OUR SHEDULE</P>
            <p><b>BOYS</b></p>
            <table>
            	<tr>
                	<th>DATE</th>
                    <th>01 -03-16</th>
                </tr>
                <tr>
                	<th>5PM-8PM :</th>
                    <th>1<sup>st</sup> Day Chess</sup>
                </tr>
                <tr>
                	<th>DATE</th>
                    <th>02 -03-16</th>
                </tr>
                <tr>
                	<th>5PM-8PM :</th>
                    <th>2<sup>nd</sup> Day Chess</sup>
                </tr>
                <tr>
                	<th>DATE</th>
                    <th>03 -03-16</th>
                </tr>
                <tr>
                	<th>5PM-8PM :</th>
                    <th>3<sup>rd</sup> Day Chess</sup>
                </tr>
            </table>
             <p><b>GIRLS</b></p>
            <table>
            	<tr>
                	<th>DATE</th>
                    <th>03-03-16</th>
                </tr>
                <tr>
                	<th>9:00 AM-12:00PM :</th>
                    <th>1<sup>st</sup> Day Chess</sup>
                </tr>
                <tr>
                	<th>1:30PM-4:30PM</th>
                    <th>1<sup>st</sup> Day Chess</th>
                </tr>
                 <tr>
                	<th>DATE</th>
                    <th>04-03-16</th>
                </tr>
                <tr>
                	<th>9:00 AM-12:00PM :</th>
                    <th>2<sup>nd</sup> Day Chess</sup>
                </tr>
                <tr>
                	<th>1:30PM-4:30PM</th>
                    <th>2<sup>nd</sup> Day Chess</th>
                </tr>
            </table>
            <br/>
            <a class="btn btn-primary">GET RULES</a>
        </div> 
        </center>
    </div>
    <script type="text/javascript">
	$(document).ready(function(e) {
        $("#im1").mouseover(function(e) {
            $(this).addClass("hidden");
			$("#mi1").removeClass("hidden");			
        });
		$("#mi1").mouseout(function(e) {
            $(this).addClass("hidden");
			$("#im1").removeClass("hidden");			
        });
    });
	</script>
    </div>
</div>

 <aside id="social" class="hidden-xs hidden-sm" style="position:fixed;top:30%;left:1%;">
 	<img src="../images/facebook2.png" style="margin-top:5px;"><br/>
    <img src="../images/google-plus.png" style="margin-top:5px;"><br/>
    <img src="../images/twitter.png" style="margin-top:5px;"> <br/>
    <img src="../images/instagram19.png" style="margin-top:5px;"><br/>
    <img src="../images/youtube30.png" style="margin-top:5px;">
 </aside>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/bootstrap-3.3.4.js" type="text/javascript"></script>
</body>
</html>
<?php

ob_end_flush();

?>