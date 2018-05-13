<?php

	function redirect_to($new_location) {
	  header("Location: " . $new_location);
	  exit;
	}

	function mysql_prep($string) {
		global $connection;
		$string=trim($string);
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}
	
	function get_emails(){
		global $connection;
		$sql="SELECT email from register"; 
		$result= mysqli_query($connection,$sql);
		if(!$result){
			die("NO SUCH USER FOUND");	
		}
		return $result;
	}
	
	function get_details(){
		global $connection;
		$sql="SELECT * from game"; 
		$result= mysqli_query($connection,$sql);
		if(!$result){
			die("NO SUCH USER FOUND");	
		}
		return $result;
	}
	
	function get_unames(){
		global $connection;
		$sql="SELECT uname from register"; 
		$result= mysqli_query($connection,$sql);
		if(!$result){
			die("NO SUCH USER FOUND");	
		}
		return $result;
	}
	
	function get_users(){
		global $connection;
		$sql="SELECT * from register"; 
		$result= mysqli_query($connection,$sql);
		if(!$result){
			return false;	
		}
		return $result;
	}
	
	function get_phone(){
		global $connection;
		$sql="SELECT phone from register"; 
		$result= mysqli_query($connection,$sql);
		if(!$result){
			die("NO SUCH USER FOUND");	
		}
		return $result;
	}

	function form_errors($errors=array()) {
		$output = "";
		if (!empty($errors)) {
		  $output .= "<div class=\"error\">";
		  $output .= "Please fix the following errors:";
		  $output .= "<ul>";
		  foreach ($errors as $key => $error) {
		    $output .= "<li>";
				$output .= htmlentities($error);
				$output .= "</li>";
		  }
		  $output .= "</ul>";
		  $output .= "</div>";
		}
		return $output;
	}
	
	
	function generate_salt($length) {
	  // Not 100% unique, not 100% random, but good enough for a salt
	  // MD5 returns 32 characters
	  $unique_random_string = md5(uniqid(mt_rand(), true));
	  
		// Valid characters for a salt are [a-zA-Z0-9./]
	  $base64_string = base64_encode($unique_random_string);
	  
		// But not '+' which is valid in base64 encoding
	  $modified_base64_string = str_replace('+', '.', $base64_string);
	  
		// Truncate string to the correct length
	  $salt = substr($modified_base64_string, 0, $length);
	  
		return $salt;
	}
	
	function password_encrypt($password) {
  	  $hash_format = "$2y$10$";   // Tells PHP to use Blowfish with a "cost" of 10
	  $salt_length = 22; 					// Blowfish salts should be 22-characters or more
	  $salt = generate_salt($salt_length);
	  $format_and_salt = $hash_format . $salt;
	  $hash = crypt($password, $format_and_salt);
	  return $hash;
	}
	
	function password_check($password, $existing_hash) {
		// existing hash contains format and salt at start
	  $hash = crypt($password, $existing_hash);
	  if ($hash === $existing_hash ) {
	    return true;
	  } else {
	    return false;
	  }
	}

	function attempt_login($username, $password) {
			$admin;
			$admins=get_users();
			while($row=mysqli_fetch_assoc($admins)){
				if($username==$row["uname"]){
					$admin = $row;
					break;
				}else{
					$admin = false;
				}
			}
			if ($admin) {
				// found admin, now check password
				if (password_check($password, $admin["pass"])) {
					// password matches
					return $admin;
				} else {
					// password does not match
					//$mgf="passs mc";
					return false;
				}
			}
			else {
				// admin not found
				return false;
			}
			
	}

	function logged_in() {
		return isset($_SESSION['id']);
	}
	
	function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to("login.php");
		}
	}

?>

