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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  
<style type="text/css">
body{background-image:url(../images/loginbc.jpg);background-size: cover;background-repeat: no-repeat;}
label { display: block; float: left; clear: both; text-align: right;margin: 0.6em 5px 0 0; width: 40%; height:30px; }
	input, select, textarea { float:left; margin: 1em 0 0 0; width:50%; height:30px; border-radius:7px; padding-left:0.7rem;
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
	background-color:#18DDE7;text-align:center;color:#FFFFFF;	
	}
	.btn{
		background-color:#18DDE7;
		height:40px;
		width:40%;
		margin-top:2em;
		margin-left:1em;
		border-radius:10px
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

<nav class="navbar navbar-default navbar-fixed-top nav-justified">
  <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#"><img src="../images/technoriti-logo-boom.png" width="100" height="100" class="img-responsive" alt="Placeholder image"></a></div>
   <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar1">
         <ul class="nav navbar-nav">
          <li><a href="../">HOME</a></li>
          <li><a href="../events">EVENTS</a></li>
          <li><a href="../other/parakram.php">PARAKRAM</a></li>
          <li><a href="../other/umang.php">UMANG</a></li>
          <li><a href="../other/alumni.php">SANGAM</a></li>
          <li><a href="../other/pmentors.php">OUR MENTOR</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        	<li><a href="../sponsors.php">SPONSORS</a></li>
        	<li><a href="../campus.php">CAMPUS AMBASSADOR</a></li>
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
    	 <div class="col-md-5 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
         	 <div class="row" >
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="nme">
                    <h1>INFORMATION</h1>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " id="box">
                    <ul>
                    	<li>ENter your ID provided in general registration</li>
                        <li>If you have no id get ID  <a href="register.php">here</a></li>
                        <li>Registration for Cricket, Football and Volleyball will occours offline </li>
                        <li>You can register only one event at a time</li>
                        <li>Registered events can be seen on your <a href="details.php">dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <div class="row" >
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="nme">
                    <h1> REGISTER</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " id="box">
                    <?php 	
							if(isset($_POST["action"]) && $_POST["action"]=="submit"){
								$game=mysql_prep($_POST["game"]);
								$id=mysql_prep($_SESSION["id"]);
					
								$details=get_details();
								chk_for_game($game,$details);
								
								$final=form_errors($errors);
								if($final==""){
										$sql="INSERT INTO game (id,name) VALUES ('{$id}','{$game}')";
										$result=mysqli_query($connection,$sql);
										if(!$result){
											die("Unable To Register ");	
										}else{
											echo "your sucessfully registered for this event<br/>";
											echo "<a href=\"parakramreg.php\">REGISTER FOR NEXT EVENT</a><br/>";
											echo "<a href=\"../other/parakram.php\">BACK TO PARAKRAM</a>";	
										}	
								}else{
									displayForm($final);
								}								
							}else{
								$message="Fill up the form to get register in this event";
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

<form action="parakramreg.php" method="post" style="margin-bottom: 50px;">
  <div class="row">
   
 <input type="hidden" name="action"  value="submit"  />
   
 <label for="id">ID *</label>
 <input type="text" name="id" id="id" value="<?php echo $_SESSION["id"]?>" disabled/>
 
  <label for="game">SELECT GAME *</label>
 <select name="game" id="game" size="1">
 <option value="B">BADMINTON (BOYS AND GIRLS)</option>
 <option value="C">CHESS(BOYS AND GIRLS)</option>
 <option value="" disabled>ATHLETICS</option>   
 <option value="R1">100 M RACE (BOYS AND GIRLS) </option>
 <option value="R2">200 M RACE (BOYS AND GIRLS)</option>
 <option value="R3">400 M RACE (BOYS)</option>
 <option value="R4">4*100 m RELAY RACE(BOYS)</option>
 <option value="LJ">LONG JUMP(BOYS)</option>
 <option value="HJ">HIGH JUMP(BOYS)</option>
 <option value="SP">SHOT PUT(BOYS)</option>
 <option value="JT">JAVELIN THROW(BOYS)</option>
 <option value="DT">DISCUS THROW(BOYS)</option>
 </select>
</div>
 <div class="row col-md-offset-3" style=" margin-top:1em">
 <input type="submit" name="submitButton" class="btn"  value="Submit" />
  </div>
 
 
 </form>
<?php } ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-1.11.2.min.js"></script>
   

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="../js/bootstrap-3.3.4.js" type="text/javascript"></script>
</body>
</html>
