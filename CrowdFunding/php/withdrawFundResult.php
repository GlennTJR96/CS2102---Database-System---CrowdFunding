<?php
   include("config.php");
   session_start();
   
   $error = "Account Already Exist!";
   
   if($_SERVER["REQUEST_METHOD"] == "GET") {
      // username and password sent from form 
      
	  // pg_escape_string() escapes a string for querying the database. 

	  $pId = $_GET['pId'];
	  $username = $_SESSION['login_user'];
	  echo $username;
	  $sql = "SELECT * FROM withdrawFunding('$username',$pId)";
	  $res = pg_query($db,$sql);
	  
	  $row = pg_fetch_row($res);
	  if ($row[0] == 't') {
		header("location: myProj.php");
	  } else if ($row[0] == 'f'){
		
		$_SESSION['withdrawError'] = "You can only withdraw from an ongoing project or fully funded project!";
		header("location: myProj.php");
		
	  }
     
   }
?>