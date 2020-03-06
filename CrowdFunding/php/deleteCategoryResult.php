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

	  $catName = $_GET['catName'];
	  //$username = $_SESSION['login_user'];
	  //echo $username;
	  echo $catName;
	  $sql = "UPDATE managedCategory Set is_valid = 'f' WHERE catname= '".$catName."'";
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