<?php
   include("config.php");
   session_start();
   
   if (!isset($_SESSION['login_admin'])) {
		header(login.php);
   }
   
   $error = "Account Already Exist!";
   
   if($_SERVER["REQUEST_METHOD"] == "GET") {
      // username and password sent from form 
      
	  // pg_escape_string() escapes a string for querying the database. 

	  $name = $_GET['name'];
	  //$username = $_SESSION['login_user'];
	  //echo $username;
	  echo $name;
	  $sql = "select * FROM unlock_lowcreditAccount('".$name ."')";
	  $res = pg_query($db,$sql);
	  
	  header("location: AdminDashboard.php");
	  
	  /*$row = pg_fetch_row($res);
	  if ($row[0] == 't') {
		header("location: myProj.php");
	  } else if ($row[0] == 'f'){
		
		$_SESSION['withdrawError'] = "You can only withdraw from an ongoing project or fully funded project!";
		header("location: myProj.php?pId=$pId");
		
	  }*/
     
   }
?>