<?php
	include('UserSession.php');
	
	$project_check = $_SESSION['desc'];
	echo $project_check;
	$err = "*** FAIL: Destroy! ***";
	$suc = "*** SUCCESS: Perk detail has been saved! ***";

	if($_SERVER["REQUEST_METHOD"] == "POST") {
      
		// pg_escape_string() escapes a string for querying the database. 
		// It returns an escaped string in the PostgreSQL format without quotes.
		$tier = $_POST['tier'];
		$description = $_POST['description'];
		$amount = $_POST['amount'];
		
		$pid_sql = pg_query($db,"select pid from project where projectdescription = '$project_check' ");
		$row = pg_fetch_array($pid_sql);
		$project_session = $row['pid'];
		$sql = "SELECT * FROM insertTiers('$tier', '$description', '$amount', '$project_session')";
		$result = pg_query($db,$sql);
		$row = pg_fetch_array($result);
		
		if($row[0] == 't')
		{
			$_SESSION['suc'] = $suc;
			header("location: createaproject.php"); 
		}
		else
		{
			$_SESSION['err'] = $err;
			header("location: createaproject.php?msg=failed"); 
		}
   }
?>