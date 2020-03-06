<?php
	include("config.php");
	session_start();
	 if (!isset($_SESSION['login_admin'])) {
		header("location:login.php");
	}
   
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		
		$username = $_POST['usrname'];
		$pwd = $_POST['psw'];	        

		$testLogin = "select * from do_adminlogin('$username','$pwd');";
		$result = pg_query($db,$testLogin);
		$row = pg_fetch_row($result);            
		
		if ($row[0] == "False") {
			$error = "Your Login Name or Password is invalid";
			$_SESSION['error_admin'] = $error;
			header("location: login.php?msg=failed");
		
		} else {
			$_SESSION['login_admin'] = $username; 
			header("location: admindashboard.php");
      }
   }
?>