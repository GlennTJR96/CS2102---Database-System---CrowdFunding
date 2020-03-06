<?php

session_start();
if (!isset($_SESSION['login_user'])) {
	header("location:login.php");
}

?>
<!DOCTYPE html>
<html>
<title>Fundstarter - Crowdfunding System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="logo.png" type="image/gif" sizes="160x160">
<link href="../css/style_cap.css" rel='stylesheet' type='text/css'/>
		<link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Simple Tab Forms Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
 
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/mac.jpg");
  min-height: 100%;
  background-opacity:50%
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="myProj.php" class="w3-bar-item w3-wide"><img src="facebook_cover_photo_1.png" alt="Fundstarter Logo" style="width:auto; height:60px;"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-padding-16 w3-hide-small">
	  <a href="myProj.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Home</a>

	  <div class="dropdown w3-right w3-bar-item">
    <button class="dropbtn">Hello,  
	  <?php 
  if($_SESSION['login_user']==true)
    { 
	  $username = $_SESSION["login_user"];
      echo $_SESSION["login_user"];
    }
  else if($_SESSION['login_user']==false)
    {
      echo '<a href="signup.html"><span>Login/Register</span></a></li>';
    }
  ?>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="myProj.php">My Projects</a>
	  <a href="logout.php">Log Out</a>
    </div>
  </div> 
	  <a href="#bar" class="w3-right w3-bar-item w3-button"> |</a>
	  <a href="startaproject.php" class="w3-right w3-bar-item w3-button"><i class="fa fa-leaf"></i> Start a Project</a>
    </div>

    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>


<!-- Header with full-height image -->

<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
<br></br>
	<h1 style = "text-align:center; color:white;"> *** Welcome to My Dashboard! *** </h1>
  	<div class="main-content">

        <div class="right-w3">
			<div class="sap_tabs">	
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>My Projects</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>my Fundings</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>My Top Fan</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Common Interest</span></li>
				    <div class="clear"></div>
					</ul>	
					<div class="agile-tb">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<form action="#" method="post">		
								<h1> View All My Projects </h1>
									<?php
									$count = 0;
										include("config.php");
										$result = pg_query($db, "SELECT * FROM updateAllStatus()");
										$result = pg_query_params($db,"SELECT * FROM project WHERE creatorname = $1", array($username));
										if (pg_num_rows($result) == 0) {
											echo "<h1> You have no projects. Start one now! </h1>";
										} else {
											echo "<table>";
											echo "<tr style='color:white; border: solid 1px white' ><th>Description</th><th>Category</th><th>Deadline</th><th>Status</th></tr>";
											
											while($row=pg_fetch_assoc($result)){echo "<tr>";
											$count++;
											echo "<td align='center' width='150' style='color:white; border: solid 1px white';><a href = 'projectPage.php?pId=" . $row['pid'] . "'>". $row['projectdescription'] . "</a></td>";
											echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['catname'] . "</td>";
											echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['deadline'] . "</td>";
											echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['status'] . "</td>";
											echo "</tr>";}echo "</table>";
										}
										echo "<p align='center' width='150' style='color:white; border: solid 1px white';>" ."TOTAL: "  . $count. " PROJECTS"."</p>";
		
									?>
									
									<h1> View Project By Category </h1>
										<?php
										
										include("config.php");
										$result = pg_query($db, "SELECT * FROM updateAllStatus()");
										$result = pg_query_params($db,"SELECT * FROM project WHERE creatorname = $1 GROUP BY catname,pid ORDER BY catname", array($username));
										//$colheads = ['SID', 'FName', 'LName', 'activity'];
										$tmp = null;
										if (pg_num_rows($result) == 0) {
											echo "<h1> You have no projects. Start one now! </h1>";
										} else {
											$count = 0;
											while($row=pg_fetch_assoc($result)){
												$count++;
												if($tmp != $row['catname'])
												{

													if($tmp !== null){
														
														echo '</table><br>';
													}

													echo "<table>";
											        
											echo "<tr style='color:white; border: solid 1px white' ><th>Description</th><th>Category</th><th>Deadline</th><th>Status</th>";
													
												}
												 echo "<tr>";
																		
											 echo "<td align='center' width='150' style='color:white; border: solid 1px white';><a href = 'projectPage.php?pId=" . $row['pid'] . "'>". $row['projectdescription'] . "</a></td>";
											 echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['catname'] . "</td>";
											 echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['deadline'] . "</td>";
											 echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['status'] . "</td>";
											 
											 echo "</tr>";
												$tmp = $row['catname']; 
											}
											if($tmp!== null)
											{
											echo '</table>';
											}
										}
									?>
									<h1> View Project By Status </h1>
										<?php
										include("config.php");
										$result = pg_query($db, "SELECT * FROM updateAllStatus()");
										$result = pg_query_params($db,"SELECT * FROM project WHERE creatorname = $1 GROUP BY status,pid ORDER BY status", array($username));
										//$colheads = ['SID', 'FName', 'LName', 'activity'];
										$tmp = null;
										if (pg_num_rows($result) == 0) {
											echo "<h1> You have no projects. Start one now! </h1>";
										} else {
											//echo "<table>";
											//echo "<tr style='color:white; border: solid 1px white' ><th>Description</th><th>Category</th><th>Deadline</th><th>Status</th></tr>";
											
											while($row=pg_fetch_assoc($result)){
												if($tmp != $row['status'])
												{
													if($tmp !== null){
														echo '</table><br>';
													}
													//echo '<table border=1><tr><th>' , implode('</th><th>', $colheads);
													echo "<table>";
											        
											echo "<tr style='color:white; border: solid 1px white' ><th>Description</th><th>Category</th><th>Deadline</th><th>Status</th>";
													
												}
												 //echo '<tr><td>' , implode('</td><td>', $row) , '</td></tr>';  // display the row data
												 echo "<tr>";
																							
											 echo "<td align='center' width='150' style='color:white; border: solid 1px white';><a href = 'projectPage.php?pId=" . $row['pid'] . "'>". $row['projectdescription'] . "</a></td>";
											 echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['catname'] . "</td>";
											 echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['deadline'] . "</td>";
											 echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['status'] . "</td>";
											 echo "</tr>";
											
												$tmp = $row['status']; 
											}
											if($tmp!== null)
											{
											
											echo '</table>';
											}
											//echo "<tr>";
											// echo "<td align='center' width='150' style='color:white; border: solid 1px white';><a href = 'projectPage.php?pId=" . $row['pid'] . "'>". $row['projectdescription'] . "</a></td>";
											// echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['catname'] . "</td>";
											// echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['deadline'] . "</td>";
											// echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['status'] . "</td>";
											// echo "</tr>";}echo "</table>";
										}
									?>

							</form>
						</div>	
						<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
							<form action="#" method="post">		
								
									<?php
										$query = "SELECT * FROM showFundersProjects('" .$username. "')";
										#$result = pg_query_params($db,"SELECT * FROM showFundersProjects('Glenn')", array($username));
										$result = pg_query($db,$query);
										if (pg_num_rows($result) == 0) {
											echo"<h1> You're not funding any project, start now! </h1>";
										} else {
											echo "<h1> View All My Fundings! </h1>";
											echo "<table>";
											echo "<tr style='color:white; border: solid 1px white' ><th>Description</th><th>Category</th><th>Deadline</th><th>Status</th><th>Action</th></tr>";
											while($row=pg_fetch_assoc($result)){
												echo "<tr>";
												echo "<td align='center' width='150' style='color:white; border: solid 1px white';><a href = 'projectPage.php?pId=" . $row['pid'] . "'>". $row['projectdescription'] . "</a></td>";
												echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['catname'] . "</td>";
												echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['deadline'] . "</td>";
												echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['status'] . "</td>";
												echo "<td align='center' width='150' style='color:white; border: solid 1px white';>";
												echo "<a href='withdrawFundResult.php?pId=".$row['pid'] ."' method='post'>";
												echo "Withdraw Funds";
												echo "</br>";
												if (isset($_SESSION['withdrawError'])) {
													echo $_SESSION['withdrawError'];
													unset($_SESSION['withdrawError']);
												}				
												echo "</td>";
												echo "</tr>";
											}
											echo "</table>";
										}
								
									?>	
									
										<?php
										
										include("config.php");
										$query = "SELECT * FROM showFundersProjects('" .$username. "')";
										#$result = pg_query_params($db,"SELECT * FROM showFundersProjects('Glenn')", array($username));
										$result = pg_query($db,$query);
										echo "<table>";
										//$colheads = ['SID', 'FName', 'LName', 'activity'];
										$tmp = null;
										if (pg_num_rows($result) == 0) {
											echo "<h1> You have no projects. Start one now! </h1>";
										} else {
											echo "<h1> View Fundings By Category! </h1>";
											$count = 0;
											while($row=pg_fetch_assoc($result)){
												$count++;
												if($tmp != $row['catname'])
												{

													if($tmp !== null){
														
														echo '</table><br>';
													}

													echo "<table>";
											        
											echo "<tr style='color:white; border: solid 1px white' ><th>Description</th><th>Category</th><th>Deadline</th><th>Status</th><th>Action</th></tr>";
													
												}
												 echo "<tr>";
																		
											 echo "<td align='center' width='150' style='color:white; border: solid 1px white';><a href = 'projectPage.php?pId=" . $row['pid'] . "'>". $row['projectdescription'] . "</a></td>";
												echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['catname'] . "</td>";
												echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['deadline'] . "</td>";
												echo "<td align='center' width='150' style='color:white; border: solid 1px white';>" . $row['status'] . "</td>";
												echo "<a href='withdrawFundResult.php?pId=".$row['pid'] ."' method='post'>";
												echo "<td align='center' width='150' style='color:white; border: solid 1px white';>";
												echo "Withdraw Funds";
												echo "</br>";
												if (isset($_SESSION['withdrawError'])) {
													echo $_SESSION['withdrawError'];
													unset($_SESSION['withdrawError']);
												}				
												echo "</td>";
												 
											 echo "</tr>";
												$tmp = $row['catname']; 
											}
											if($tmp!== null)
											{
											echo '</table>';
											}
										}
									?>									
							</form>
						 </div>
						 <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-2">
							<form action="#" method="post">		
								
									<?php
										$testTopFan = "SELECT * FROM findbiggestFan('".$username."')";
										$res = pg_query($db, $testTopFan);
										$row = pg_fetch_row($res);
										echo "<h1> My Top Fan... </h1>";
										echo "<p>";
										$count = pg_num_rows($res);
										if ($count == 1) {
											echo "<h1> $row[0] ! </h1>";
										} else {
											echo "<h1>You currently have no fans. Start a project!</h1>";
										}							
									?>					
							</form>
						 </div>
						 <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-3">
							<form action="#" method="post">		
								
									<?php
										echo "<h1 style='font-size: 20px;'> People with common interest as me </h1>";
										echo "</br>";
										$testCommonInterest = "select * from findUserSharesCommonInterest('".$username."')";
										$res = pg_query($db, $testCommonInterest);
										$count = pg_num_rows($res);
										if ($count == 0) {
											echo "<h1>No common interest with anyone. Fund a project soon!</h1>";
										} else {
											while ($row = pg_fetch_row($res)) {
												echo "<h1 style ='font-size:15px'>$row[0] </h1>";
												echo "</br>";
											}		
										}									
									?>					
							</form>
						 </div>
					 </div>
				</div> 
			</div> 			        					            	      
		</div>	
	</div>
  
  
  
  
  <!--<table>
	<tr> 
		<th> row1 </th>
		<th> row2 </th>
		<th> row3 </th>
	</td>
	<tr>
		<td> 123 </td>
		<td> 123 </td>
		<td> 123 </td>
	</tr>	
	
  </table>-->
  
  
  
  
  
  
  <!-- <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
    <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div> -->
</header>



 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<script src="../js/jquery.min_cap.js"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				</script>
	<script src="../js/easyResponsiveTabs_cap.js" type="text/javascript"></script>



</body>
</html>
