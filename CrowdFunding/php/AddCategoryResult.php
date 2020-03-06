<?php

include('AdminSession.php');
	
	$error = "Category Already Exist!";
	echo $admin_check;
	
	
    // define variables and set to empty values
    //$username = $email = $password = "";
         
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
      
		// pg_escape_string() escapes a string for querying the database. 
		// It returns an escaped string in the PostgreSQL format without quotes. 
		$catname = pg_escape_string($db,$_POST['categoryName']);
		$desc = pg_escape_string($db,$_POST['desc']);
		
		$sql = "INSERT INTO managedcategory VALUES ('$catname','$admin_check','$desc', DEFAULT, '')";
		$result = pg_query($db,$sql);
		$row = pg_fetch_array($result);
		
		if($row[0] == TRUE)
		{
			$_SESSION['error'] = $error;
			header("location: admindashboard.php?msg=failed"); 
		}
		else
		{
			header("location: admindashboard.php"); 
		}
		
		
   }
?>