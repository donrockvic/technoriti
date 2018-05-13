<?php
function get_all_events(){
	global $connection;
	$sql="SELECT * from events";
	$result= mysqli_query($connection,$sql);
		if(!$result){
			die("NO SUCH USER FOUND");	
		}
		return $result;
}

function get_all_reg_events(){
	global $connection;
	$sql="SELECT * from reg_events";
	$result= mysqli_query($connection,$sql);
		if(!$result){
			die("NO SUCH USER FOUND");	
		}
		return $result;
}

function submit_event($studentid,$eventcode){
	global $connection;
	$sql="INSERT INTO reg_events (studentid,eventid) values ('{$studentid}','{$eventcode}')";
	$result= mysqli_query($connection,$sql);
		if(!$result){
			die("NO SUCH USER FOUND");	
		}
}

function confirm_event($studentid,$eventcode){
	global $connection;
	$result=get_all_reg_events();
	foreach($result as $row){
		if($row["studentid"]==$studentid && $row["eventid"]==$eventcode){
			return 1;
		}else{
			return 0;
		}	
	}
}

function get_reg_info($id){
	global $connection;
	$sql="SELECT * FROM register where id='{$id}'";	
	$result= mysqli_query($connection,$sql);
		if(!$result){
			die("NO SUCH USER FOUND");	
		}
		else{
			return $result;
		}
}


function get_events_info($studentid){
	global $connection;
	$sql="SELECT * FROM reg_events where studentid='{$studentid}'";	
	$result= mysqli_query($connection,$sql);
		if(!$result){
			die("NO SUCH USER FOUND");	
		}
		else{
			return $result;
		}
}
function get_event_by_id($id){
global $connection;
$sql="SELECT * FROM events where id={$id}";	
$result= mysqli_query($connection,$sql);
		if(!$result){
			die("NO SUCH USER FOUND");	
		}
		else{
			return $result;
		}
}

function get_events_dtl($id){
	global $connection;
$sql="SELECT * FROM game where id='{$id}'";	
$result= mysqli_query($connection,$sql);
		if(!$result){
			die("NO SUCH USER FOUND");	
		}
		else{
			return $result;
		}
}



/*
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
*/

function praname($id){
	switch ($id){
		case  'C': return "CHESS";
				 break;
		case  'B': return "BADMINTON";
				 break;
		case  'R1': return "100 M RACE";
				 break;
		case  'R2': return "200 M RACE";
				 break;
		case  'R3': return "400 M RACE";
				 break;
		case  'R4': return "4*100 M RELAY RACE";
				 break;
		case  'LJ': return "LONG JUMP";
				 break;
		case  'HJ': return "HIGH JUMP";
				 break;
		case  'SP': return "SHOT PUT";
				 break;
		case  'JT': return "JAVELIN THROW";
				 break;		
		case  'DT': return "DISCUSS THROW";
				 break;		 
	}
}

?>
