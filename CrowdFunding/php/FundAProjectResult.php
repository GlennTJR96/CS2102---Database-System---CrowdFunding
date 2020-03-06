<?php
	include('UserSession.php');
	
	echo $user_check;
	
	$f = "*** FAIL: Funding project is unsuccessful! ***";
	$s = "*** SUCCESS: Your funding has been accepted, thank you! ***";
	
	 
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      
		// pg_escape_string() escapes a string for querying the database. 
		// It returns an escaped string in the PostgreSQL format without quotes. 
		//$desc = $_POST['projectDescription'];
		//$name = $_POST['projectCreator'];
		$amount = $_POST['fundAmount']; 
		$pId = $_POST['projectid'];
		//$date = $_POST['fundDate']; 
		
		/** if($amount > 0){
		$pid_sql = pg_query($db,"SELECT pid, creatorname, status FROM project WHERE projectdescription ='".$desc."' AND creatorname = '".$name."'");
		$row = pg_fetch_array($pid_sql);
		$pid_session = $row['pid'];
		$user = $_SESSION['login_user'];
		$status = $row['status'];
		}
		if ($pid_session == "" || $user == $name || $status != 'On-going' ) {
			echo "first";
			$_SESSION['f'] = $f;
			header("location: fundaproject.php?msg=failed");			
		} else { */
			echo "2nd else";
			echo $amount;
			$sql = "INSERT INTO FUNDS VALUES ('$pId ', '$user_check', '$amount', 'now()')";
			$result = pg_query($db,$sql);
			$row = pg_fetch_array($result);
			$check_sql = "SELECT fundername FROM FUNDS WHERE pid = '$pId' AND fundername = '$user_check' AND famount = '$amount' AND fdate =  'now()'";
			$result = pg_query($db,$check_sql);
			$row = pg_fetch_array($result);
			// $_SESSION['test'] = $row;
			// header("location: test.php");
			$count = pg_num_rows($result);
		/* } */
	
		if($count == 1)
		{
			echo "3rd else";
			$_SESSION['s'] = $s;
			header("location: fundaproject.php");
		}
		else if( $_SESSION["login_user"] == $name)
		{
			echo "last";
			$_SESSION['f'] = $f;
			header("location: fundaproject.php?msg=failed");
		}
   }
   
?>