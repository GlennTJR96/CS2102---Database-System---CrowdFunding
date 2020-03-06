<?php
   include("config.php");
   session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
      
		$myusername = pg_escape_string($db,$_POST['usrname']);
		$mypassword = pg_escape_string($db,$_POST['psw']); 
      
		$sql = "SELECT name FROM normaluser WHERE name = '$myusername' and password = '$mypassword'";
		$result = pg_query($db,$sql);
		$row = pg_fetch_array($result,PGSQL_ASSOC);
		$active = $row['active'];
		
		$count = pg_num_rows($result);
      
		// If result matched $myusername and $mypassword, table row must be 1 row
		
		if($count == 1) {
			//session_register("myusername");
			$_SESSION['login_user'] = $myusername;
         
			header("location: userloggedin.php");
		}else {
			$error = "Your Login Name or Password is invalid";
			
			$_SESSION['error_user'] = $error;
			header("location: login.php?msg=failed");
		}	
   }
?>