<?php  require_once("register/includes/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content="Technoriti:Technical Fest of BCE, Bhagalpur.A three days carnival for all the technical and cultural evets">
    <meta name="keywords" content="Technoriti,technoriti official,technoriti,technoriti login,technoriti signup,technoriti register,register Technoriti,register technoriti,,Technorit.in,technoriti.in,BCE technoriti,technoriti BCE,bce technoriti,technoriti bce, bce techfet,techfest bce,umang,parakram,techfet bhagalpur,annual techfet bhagalpur">
    <meta name="author" content="Technoriti">
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLO" >
    <title>Technoriti</title>
    <!-- Bootstrap -->
    <link href="https://plus.google.com/u/1/+TechnoritiIn" rel="Publisher" />
    <link rel="shortcut icon" href="images/technoriti-logo-boom.png" />
    <link href="css/bootstrap-3.3.4.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/text.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/must.css">
    <link href="css/homepage.css" rel="stylesheet" type="text/css" media="screen">
    <script src="js/jquery-1.11.2.min.js"></script>
    <style type="text/css">
	</style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head> 
  
  <?php
  function displaybtn(){
	  if(isset($_SESSION["uname"])){
		  echo "<li><a href=\"register/details.php\">DASHBOARD</a></li>"."<li><a href=\"register/logout.php\" >LOGOUT</a></li>";
	  }
	  else{
	    echo "<li><a href=\"register/register.php\" >SIGN UP</a></li>";	
		echo "<li><a href=\"register/login.php\"  >LOGIN</a></li>";	
	   }
  }
  ?>
  
  <body style="padding-top:0px">
  
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <a class="navbar-brand" href="#"><img src="images/technoriti-logo-boom.png" height="60" width="80" alt="logo" /></a> </div>
    <div class="collapse navbar-collapse" id="nav1">
    <ul class="nav navbar-nav navbar-left">
    <li class="active"><a href="#home">HOME</a></li>
    <li><a href="events/index.php">EVENTS</a></li>
    <li><a href="other/parakram.php">PARAKRAM</a></li>
    <li><a href="other/umang.php">UMANG</a></li>
    <li><a href="other/alumni.php">SANGAM</a></li>
    <li><a href="other/pmentors.php">OUR MENTOR</a></li>
    <li><a href="sponsors.php">SPONSORS</a></li>
    <li><a href="help.php">HOSPITALITY</a></li>
    <?php displaybtn();?>
    </ul>
    </div>
    </div>
  </nav>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title" style="color:#FFFFFF">WEB TEAM</h4></center>
      </div>
      <div class="modal-body">
       <center >
        <img src="images/vicky.png" class="img img-responsive" alt="technorit vicky" width="40%" height="40%" />
       	<p><font size="+2" color="#FFFFFF">VICKY KUMAR</font></p>
        <p><font size="+1" color="#FFFFFF">SOPHOMERE,CSE
        <BR/>+919006773422
        <BR/><a href="mailto:donrocvic@outlook.com" style="color:#FFFFFF">donrocvic@outlook.com</a></font>
        <p>
        <script src="//platform.linkedin.com/in.js" type="text/javascript"></script> <script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/vicky-kumar-19192998" data-format="click" data-text="Vicky Kumar"></script>
        </p>
       </center>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
  
  $(document).ready(function(){       
   var scroll_start = 10;
   var startchange = $('.nav');
   var offset = startchange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('.nav1').removeClass('hidden');
		  $('.nav2').addClass('hidden');
       } else {
         $('.nav1').addClass('hidden');
		  $('.nav2').removeClass('hidden');
       }
   });
});
  
  </script>
  
<header style="padding-top:10px;">
<ul class="header">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 hidden-xs hidden-sm">
            <div class="cssload-preloader">
                <div class="cssload-preloader-box">		
                    <div>T</div>
                    <div>E</div>
                    <div>C</div>
                    <div>H</div>
                    <div>N</div>
                    <div>O</div>		
                    <div>R</div>		
                    <div>I</div>		
                    <div>T</div>		
                    <div>I</div>
                </div>
            </div>
        </div>
         <div class="col-md-12 text-center hidden-lg hidden-md" style="color:#FFFFFF;top:200px">
           <h3 class="elegantshadow">TECHNORITI</h3>
        </div>
    </div>
    
   <div class="row" style="position:absolute;top:60%;left:25%">
        <center><div class="col-md-12 col-sm-12 col-xs-12" id="recdisp" ></div></center>
    </div>    
   <div class="row" style="position:absolute;top:60%">
   <div class="col-md-4"></div>
    <div class="col-md-4"> </div>
    <div class="col-md-4 shd"><a href="shedule.pdf" class="btn btn-primary glass">GET OUR SCHEDULE</a></div>
  </div> 
  
  	<div class="intro-scroller">
				<a class="inner-link" href="#about">
					<div class="mouse-icon" style="opacity: 1;">
						<div class="wheel"></div>
					</div>
				</a> 
			</div>  
</div>
</ul>      
</header>
<script>
$(document).ready(function(){
$("#recdisp").load("timer.php");
});
setInterval( function(){   $("#recdisp").load("timer.php")}, 1000 );
</script>

<section class="aboutus" id="about" style="padding-top:100px;padding-bottom:50px">
    <div class="container-fluid">
      <div class="row text-center">
         <div class="col-md-offset-1 col-md-10">
     		 <p class="textl">ABOUT US</p>
          </div>
      </div>
      <div class="row text-center text-justify">
    <div class="col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 " id="text">
    <b itemprop="name">TECHNORITI </b>is the umbrella name for the annual techno-management cum cultural fest organised by the students of Bhagalpur College of Engineering, Bhagalpur. Technoriti is the amalgamation of two words,<b> ‘Techno’ </b>and ‘riti’. The term<b> ‘Techno’</b> refers to technology, and <b>‘riti’</b> refers to cultural values and ethics. The four day fest kicks off with various techno-management events and finally ends with UMANG - The cultural night.  
    </div>
    <div class="col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" id="text">
         The fest was first held in the year 2012 under the name<b> AAGHAZ</b>. The AAGHAZ was splendid and it changed into TECHNORITI in 2013, from there onwards, there was no looking back, we competed with our past and endeavoured towards making it grow larger, bigger and better in all aspects. It makes us immensely proud to present<b> TECHNORITI- 16, Ionising Future!</b>
    </div>
    </div>
    </div>
</section>

<section class="details" style="padding-top:50px;padding-bottom:50px">
<div class="container-fluid">
    <div class="row text-center">
        <div class=" col-md-12 cl-sm-12 col-xs-12">
         <p class="textl">OUR ACTIVITIES</p>
        </div>
     </div>
     <div class="row" style="padding-top:50px;">
       <div class="col-lg-3 col-md-3  col-md-offset-0 col-sm-4 col-sm-offset-1 col-xs-4 col-xs-offset-1">
        <a href="events/index.php">
         <center>
   	     <img src="images/svg/events.svg" width="50%" alt="technoriti events" height="50%" class="img-circle icon"/>
    	 <p class="xs" itemprop="name">EVENTS</p>
    	 </center>
         </a>
        </div>
       <div class="col-lg-3 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-1 col-xs-4 col-xs-offset-1 ">
    <a href="events/workshop.php">
        <center>
        <img  src="images/svg/workshop.svg" width="50%" height="50%" alt="technoriti workshop" class="img-circle icon"/>
         <p class="xs" itemprop="name">WORKSHOP</p>
        </center>
    </a>
    </div>
       <div class="col-lg-3 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-1 col-xs-4 col-xs-offset-1 ">
    <a href="guestlt.php">
        <center>
        <img src="images/svg/guestlt.svg" width="50%" height="50%" alt="technoriti guest" class="img-circle icon">
         <p class="xs" itemprop="name">SEMINAR</p>
        </center>
    </a>
    </div>
       <div class="col-lg-3 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-1  col-xs-4 col-xs-offset-1">
    <a href="events/exhibition.php">
        <center>
        <img src="images/svg/exhibition.svg"  width="50%" height="50%" alt="technoriti exhibitions" class="img-circle icon">
        <p class="xs" itemprop="name">EXHIBITIONS</p>
        </center>
    </a>
    </div>
    </div>
 </div>
</section>

<section id="contact" style="padding-bottom:50px;">
			<div class="container"> 
				<div class="row">
					<div class="col-md-12">
						<div class="col-lg-12" style="padding-bottom:15px;">
							<div class="text-center color-elements">
							<h2>Contact Us</h2>
							</div>
						</div>
						<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
							<form class="inline" id="contactForm" method="post" >
								<div class="row">
									<div class="col-sm-6 height-contact-element">
										<div class="form-group">
											<input type="text" name="first_name" class="form-control custom-labels" id="name" placeholder="FULL NAME" required data-validation-required-message="Please write your name!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-sm-6 height-contact-element">
										<div class="form-group">
											<input type="email" name="email" class="form-control custom-labels" id="email" placeholder="EMAIL" required data-validation-required-message="Please write your email!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-sm-12 height-contact-element">
										<div class="form-group">
											<input type="text" name="message" class="form-control custom-labels" id="message" placeholder="WHAT'S ON YOUR MIND" required data-validation-required-message="Please write a message!"/>
										</div>
									</div>
									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<input type="submit" class="btn btn-md btn-primary" value="SEND IT"/>
										</div>
									</div>
									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<button type="button" class="btn btn-md btn-primary" name="reset">RESET
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
        
  <section class="hidden-lg hidden-md social text-center">
  	<p>FOLLOW US AT</p>
 	<a href="https://www.facebook.com/technoriti/" ><img src="images/facebook2.png"></a>
	<a href="https://plus.google.com/u/2/b/113807563925304598354/"><img src="images/google-plus.png"></a>
    <a href="https://twitter.com/technoriti"><img src="images/twitter.png"></a>
 </section>

<footer class="footer">
<div class="container-fluid">
    <div class="col-md-3 col-sm-0 col-xs-0 footer"></div>
    <div class="col-md-9 col-sm-10 col-xs-10 footer">
    <a type="button" style="cursor:pointer;" data-toggle="modal" data-target="#myModal">WEB TEAM</a>
      <!-- Trigger the modal with a button -->
     <a href="https://www.google.co.in/maps/dir/Bhagalpur+Junction,+Bhikhanpur,+Bhagalpur,+Bihar+812002/Bhagalpur+College+of+Engineering,+NH+80,+Bhagalpur,+Bihar+813210/@25.2473213,87.0083115,4347m/data=!3m1!1e3!4m19!4m18!1m10!1m1!1s0x39f04a0557a997bf:0xe2a547943ee900cc!2m2!1d86.9725178!2d25.2415233!3m4!1m2!1d86.9922169!2d25.2512278!3s0x39f049e2cdfab4a7:0xca626775f444b322!1m5!1m1!1s0x39f037e0038ab9c5:0x22c17e1a5a3a54a7!2m2!1d87.0428412!2d25.2546883!3e0?hl=en">HOW TO REACH</a>
     <a href="archive/">ARCHIVE</a>
     <a href="gallery.php">GALLERY</a>
    </div>
    </div>
</footer>

 <aside id="social" class="hidden-xs hidden-sm" style="position:fixed;top:40%;left:1%;">
 	<a href="https://www.facebook.com/technoriti/" ><img src="images/facebook2.png" style="margin-top:5px;"></a><br/>
    <a href="https://plus.google.com/u/2/b/113807563925304598354/"><img src="images/google-plus.png" style="margin-top:5px;"></a><br/>
    <a href="https://twitter.com/technoriti"><img src="images/twitter.png" style="margin-top:5px;"></a> <br/> 
 </aside>

<div>
<div id="upd_bdy" class="hidden-md hidden-xs hidden-sm">
<div id="upd_nme" style="text-align:center;font-weight: bold; line-height:25px;color:#FFFFFF; padding-top:1.5em;">
U<br/>P<br/>D<br/>A<br />T<br/>E<br/>S
</div>
<div id="upd_text">

</div>
</div>
<div id="spon_bdy" class="hidden-md hidden-xs hidden-sm">
<div id="spon_img" style="text-align:center;"><h4>OUR PARTNERS</h4><img id="imgs" src="images/sponsors/msg91Badge.png" width="80%" height="80%" alt="technoriti" /></div>
</div>

<script>
$(document).ready(function(){
$("#upd_text").load("notice.php");

$(".icon").mouseover(function(e) {
    $(this).animate({width:'+=10px',height:'+=10px'});
});
$(".icon").mouseout(function(e) {
    $(this).animate({width:'-=10px',height:'-=10px'});
});

});
 setInterval( function(){   $("#upd_text").load("notice.php")}, 1000 );
</script>
<script type="text/javascript">
var y=0;
function moves(){
switch(y){
case 1: 
        $("#spon_bdy").animate({top:'+=195px'},"slow");
        y=0;
        break;
case 0:
        $("#spon_bdy").animate({top:'-=195px'},"slow");
        y=1;
        break;
}
};
setInterval( moves, 2000 );
var z=0;
$("#upd_nme").click(function(){;
switch(z){
case 1: 
        $("#upd_bdy").animate({left:'+=26%'},"slow");
        z=0;
        break;
case 0:
        $("#upd_bdy").animate({left:'-=26%'},"slow");
        z=1;
        break;
}
});
</script> 
</div>

<script type="text/javascript" >
    var myImages = [ "images/sponsors/msg91Badge.png","images/sponsors/radio.jpg", "images/sponsors/web.jpg"];
     var obje=document.getElementById("imgs");
     function changeImgs() {
        var newImgNumber = Math.round(Math.random() * 5);
        while (obje.src.indexOf(myImages[newImgNumber]) != -1) {
            newImgNumber = Math.round(Math.random() * 5);
        }
        obje.src = myImages[newImgNumber];
     }
    setInterval(changeImgs, 2000);
</script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="js/bootstrap-3.3.4.js" type="text/javascript"></script>
  </body>
</html>