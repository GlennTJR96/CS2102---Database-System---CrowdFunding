<?php
   include("config.php");
   session_start();
   
   //$error = "Account Already Exist!";
   if (!isset($_SESSION['login_admin'])) {
		header(login.php);
   }
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  // pg_escape_string() escapes a string for querying the database. 

	  $pId = $_GET['pId'];
	  
	  $sql = "UPDATE project SET status = 'Suspended' WHERE pid=$pId";
	  $res = pg_query($db,$sql);
	  
	  $row = pg_fetch_row($res);
	  
	  /*if ($row[0] == 't') {
		header("location: myProj.php");
	  } else if ($row[0] == 'f'){
		
		$_SESSION['dltError'] = "You can only cancel an ongoing project!";
		
		
	  }*/
	  header("location: projectPage.php?pId=$pId");
	  
     
   }
?>