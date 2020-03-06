<?php
	include("config.php");
	session_start();
	
	$error = "Account Already Exist!";
	
    // define variables and set to empty values
    //$username = $email = $password = "";
         
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
      
		// pg_escape_string() escapes a string for querying the database. 
		// It returns an escaped string in the PostgreSQL format without quotes. 
		$name = pg_escape_string($db,$_POST['Username']); // username
		$email = pg_escape_string($db,$_POST['email']); // email
		$password = pg_escape_string($db,$_POST['password']); //password
	  
		$sql = "SELECT * FROM do_create('$name', '$password', '$email')";
		$result = pg_query($db,$sql);
		$row = pg_fetch_array($result);
		
		if($row[0] == 'f')
		{
			$_SESSION['error'] = $error;
			header("location: signup.php?msg=failed"); 
		}
		else
		{
			header("location: login.php"); 
		}
		
		
   }
?>