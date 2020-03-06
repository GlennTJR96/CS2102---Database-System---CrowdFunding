<?php
	include('UserSession.php');

	echo $user_check;
	
	$error = "*** FAIL: Creating project is unsuccessful! ***";
	$success = "*** SUCCESS: Your project has been saved, please continue to insert perk details! ***";

   
   
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      
		// pg_escape_string() escapes a string for querying the database. 
		// It returns an escaped string in the PostgreSQL format without quotes.
		//$startdate = $_POST['projectStartDate'];		
		$deadline = $_POST['projectEndDate'];
		$targetamt = $_POST['projectTargetedAmount'];
		$category = $_POST['projectCategory'];
		$desc = $_POST['projectDescription'];
		
		if($targetamt > 0)
		{
			$sql = "SELECT * FROM createProject('now()', '$deadline', '$targetamt', '$category', '$desc', '$user_check')";
			$result = pg_query($db,$sql);
			$row = pg_fetch_array($result);
			
			$_SESSION['desc'] = $desc;
			//header("location: test.php"); 
			$_SESSION['hi'] = $row;
			$_SESSION['date'] = $deadline;
			//header("location: test.php");
		
		}
		
		
		if($row[0] === 't')
		{
			$_SESSION['success'] = $success;
			header("location: createaproject.php"); 
		}
		else
		{

			$_SESSION['error'] = $error;
			$psqlError = pg_last_error();
			//echo $psqlError;
			$_SESSION['pg_error'] = pg_last_error();
			header("location: createaproject.php?msg=failed");
		}
	
   }
?>