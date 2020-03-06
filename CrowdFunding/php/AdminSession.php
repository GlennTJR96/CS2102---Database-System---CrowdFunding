<?php
   include('config.php');
   session_start();
   
   $admin_check = $_SESSION['login_admin'];
   
   $ses_sql = pg_query($db,"select name from admin where name = '$admin_check' ");
   
   $row = pg_fetch_array($ses_sql);
   
   $login_session = $row['name'];
   
   if(!isset($_SESSION['login_admin'])){
      header("location:login.php");
      die();
   }
?>