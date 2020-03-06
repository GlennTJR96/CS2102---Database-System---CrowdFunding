<?php
   include("config.php");
   session_start();
    if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
	}
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
      
		$myusername = pg_escape_string($db,$_POST['usrname']);
		$mypassword = pg_escape_string($db,$_POST['psw']); 
      
		$sql = "SELECT * FROM normaluser WHERE name = '$myusername' and password = '$mypassword'";
		$result = pg_query($db,$sql);
		$row = pg_fetch_row($result);
		//$active = $row['active'];
		
		$count = pg_num_rows($result);
		//echo $active;
		// If result matched $myusername and $mypassword, table row must be 1 row
		
		if($count == 1) {
			if ($row[3] == 't') {
				//session_register("myusername");
				$_SESSION['login_user'] = $myusername;     
				header("location: myProj.php");

			} else {
				$error = "Your account has been banned. Please make a new account!";
				$_SESSION['error_user'] = $error;
				header("location: login.php?msg=failed");
			}
		}else {
			$error = "Your Login Name or Password is invalid";
			
			$_SESSION['error_user'] = $error;
			header("location: login.php?msg=failed");
		}	
   }
?>