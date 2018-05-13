<?php  require_once("includes/session.php"); ?>
<?php include("includes/functions.php"); ?>
<?php  require_once("includes/db_connection.php");  ?>
<?php  require_once("includes/validation_functions.php");  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="description" content="Technical Fest of BCE, Bhagalpur">
    <meta name="keywords" content="Technoriti,Technoriti-16,technoriti,techfest bhagalpur,technoriti bhagalpur,BCE technofest,BCE techfest,BCE fest,bce techfest,bce technofest,bhagalpur college of engineering technical fest,parakram,umang">
    <meta name="author" content="Vicky Kumar">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register|Technoriti-16</title>
    <!-- Bootstrap -->
     <link rel="shortcut icon" href="../images/technoriti-logo-boom.png" />
	<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/nav.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  
<style type="text/css">
  body{background-image:url(../images/loginbc.jpg);background-size: cover;background-repeat: no-repeat;}
  label { display: block; float: left; clear: both; text-align: right;margin: 0.6em 5px 0 0; width: 40%; height:30px; }
	input, select, textarea { float:left; margin: 1em 0 0 0; width:30%; height:30px; border-radius:7px; padding-left:0.7rem;
  font-size: 1.5rem; }
	input { border: 1px solid #666; }
	input[type=radio], input[type=checkbox], input[type=submit],
	input[type=reset], input[type=button], input[type=image] { width: auto;height:30px; }
	.btn {
		height:auto;
	}
	#box{
		border:2px solid #FFFFFF;
		background-color:#FFFFFF;
		opacity:0.8;
		padding-bottom:5em;
		padding-top:5em;
	}
	#nme{
	background-color:#3399FF;text-align:center;color:#FFFFFF;	
	}
</style>
</head>
<?php
  function displaybtn(){
	  if(isset($_SESSION["uname"])){
		  echo "<li> <a href=\"details.php\">DASHBOARD</a></li>"."<li><a href=\"logout.php\"  >LOGOUT</a></li>";
	  }
	  else{
	    echo "<li class=\"active\"><a href=\"#\"  >SIGN UP</a></li>";	
		echo "<li><a href=\"login.php\"  >LOGIN</a></li>";	
	   }
  }
  ?>
<body>

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

<div class="container-fluid">
    <div class="row" style="margin-top:10%;">
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <div class="row" >
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="nme">
                    <h1> REGISTER</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " id="box">
                    <?php
    if(isset($_POST["action"]) && $_POST["action"]=="submit"){
        
        $fullName=mysql_prep($_POST["fullName"]);
        $userName=mysql_prep($_POST["userName"]);
        $password=$_POST["password"];
        $password1=$_POST["password1"];
        $gender=$_POST["sex"];
        $emailAddress=mysql_prep($_POST["emailAddress"]);
        $phone=$_POST["phone"];
        $collegeName=mysql_prep($_POST["collegeName"]);
        $branchName=$_POST["branchName"];
        $sem=$_POST["sem"];
        
        $yr=mt_rand();
        $id="16"."BTF".substr($yr,0,4);
        $member=array("fullname" =>$fullName,"username" =>$userName,"gender" =>$gender,"email" =>$emailAddress,"phone" =>$phone,"collegename" =>$collegeName,"branchname" =>$branchName,"sem" =>$sem);
        $required_fields=array('fullName','userName','password','collegeName','emailAddress','phone');
        validate_presences($required_fields) ;
        validate_mail($emailAddress);
        $required_fields1=array('fullName','userName','collegeName');
        validate_text($required_fields1);
         
        validate_no($phone);
        
        $max_fields=array('phone'=>13);
        validate_max_lengths($max_fields) ;
        
        $uname=get_unames();
        chk_for_uname($uname,$userName);
        
        $email=get_emails();
        chk_for_email($email,$emailAddress);
        
        $phone_all=get_phone();
        chk_for_phone($phone_all,$phone);
        
        pass_chk($password,$password1);
        
        
        
        $final=form_errors($errors);
        
        if($final==""){
            $password=password_encrypt($password);
            $sql="INSERT INTO register VALUES('{$id}','{$fullName}'";
            $sql.=",'{$userName}','{$password}','{$gender}','{$emailAddress}',{$phone},'{$collegeName}',";
            $sql.="'{$branchName}','{$sem}')";
            
            $result=mysqli_query($connection,$sql);
            if(!$result){
                die("Unable To Register ");	
            }else{
                echo "your id is {$id}.<br/>sucessfully registered";
                
            }	
        }else{
            displayForm($final);
        }
        
        
    }else{
        $message="Fill up the form to register";
        displayForm($message);	
    }
    
    
    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php function displayForm($message){
 echo $message; 
 ?>

<form action="register.php" method="post" style="margin-bottom: 50px;">
  <div class="row">
 <input type="hidden" name="action"  value="submit"  />
 
 <label for="fullName">Full name *</label>
 <input type="text" name="fullName" id="firstName" value=" "  />
 
 <label for="userName"> Choose a username * </label>
 <input type="text" name="userName" id="userName" value=" "  />
 
 <label for="password">Choose a password *</label>
 <input type="password" name="password" id="password" value="" />
 
 <label for="password1">Retype password *</label>
 <input type="password" name="password1" id="password1" value="" />
 
 <label >Your gender: * </label>
 <label for="genderMale"> Male </label>
 <input type="radio" name="sex" id="genderMale" value="m" checked="true"/>
 <label for="genderFemale"> Female </label>
 <input type="radio" name="sex" id="genderFemale" value="f" />
  
 <label for="emailAddress">Email address *</label>
 <input type="email" name="emailAddress" id="emailAddress" value=""/>
 
 <label for="phone">Phone No./Mobile No *</label>
 <input type="text" name="phone" id="phone" value=""  /> 
 
 <label for="collegeName">College Name *</label>
 <input type="text" name="collegeName" id="collegeName" value=""  />
 
 <label for="branchName">Select Your Branch Name *</label>
 <select name="branchName" id="branchName" size="1">
 <option value="CIVIL" >Civil</option>
 <option value="CSE" >Computer science and Engineering</option>
 <option value="ECE" >Electronics and communication Engineering</option>
 <option value="EE" > electrical Engineering </option>
 <option value="EEE" > Elcectrical and Electronics Enginnering </option>
 <option value="ME" >Mechanical enginnering</option>
 <option value="IT" >Information Technology  </option>
 <option value="LT" >Leather Technology  </option>
  <option value="OTH" >Others  </option>
 </select>
 
  <label for="sem">SEMESTER *</label>
 <select name="sem" id="sem" size="1">
 <option value="I">First </option>
 <option value="II">Second </option>
 <option value="III">Third</option>
 <option value="IV">Fourth </option>
 <option value="V">Fifth</option>
 <option value="VI">Sixth</option>
 <option value="VII">Seventh</option>
 <option value="VIII">Eighth</option>
 </select>
</div>
<div class="row" style="margin-top:50px;">
 <div class="col-md-3 col-md-offset-3" >
 <input type="submit" name="submitButton" class="btn btn-primary"  value="SUBMIT DETAILS" />
 </div>
 <div class="col-md-3 col-md-offset-3">
 <input type="reset" name="resetButton" class="btn btn-primary" value="REST FORM" style="margin-right: 20px;" />
 </div>
 </div>
 
 </form>
<?php } ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-1.11.2.min.js"></script>
   

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="../js/bootstrap-3.3.4.js" type="text/javascript"></script>
</body>
</html>
