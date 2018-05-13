<?php include("includes/functions.php"); ?>
<?php  require_once("includes/db_connection.php");  ?>
<?php  require_once("includes/validation_functions.php");  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register|Technoriti-16</title>
    <!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  
<style type="text/css">
body{
	background-image:url(../images/loginbc.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	}
	
	label { display: block; float: left; clear: both; text-align: right;margin: 0.6em 5px 0 0; width: 40%; height:30px; }
	input, select, textarea { float:left; margin: 1em 0 0 0; width:30%; height:30px; border-radius:7px; padding-left:0.7rem;
  font-size: 1rem; }
	input { border: 1px solid #666; }
	input[type=radio], input[type=checkbox], input[type=submit],
	input[type=reset], input[type=button], input[type=image] { width: auto;height:30px; }
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
<body>
<?php 
$eventid=$_POST["id"];
echo $eventid;

?>
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-1.11.2.min.js"></script>
   

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="../js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
