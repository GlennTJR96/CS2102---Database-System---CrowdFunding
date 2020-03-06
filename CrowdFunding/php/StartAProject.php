<?php

include('UserSession.php');


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

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
  background:url('../images/banner.jpg') no-repeat;
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
.img1 {
	
	position: relative;
	top: 50px;
	display: block;
	margin-left: auto;
	margin-right: auto;
}
/* Create three equal columns that floats next to each other */
.column {
	position: relative;
	color:white;
	float: left;
	width: 25%;
	padding: 15px;

}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
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
    <a href="#" class="w3-bar-item w3-wide"><img src="facebook_cover_photo_1.png" alt="Fundstarter Logo" style="width:auto; height:60px;"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-padding-16 w3-hide-small">
	  <a href="#home" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Home</a>


	  <div class="dropdown w3-right w3-bar-item">
    <button class="dropbtn">Hello,  
	  <?php 
  if($_SESSION['login_user']==true)
    { 
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
	  <a href="#startaproject" class="w3-right w3-bar-item w3-button"><i class="fa fa-leaf"></i> Start a Project</a>
    </div>

    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button"> HOME</a>
  <a href="#whatwedo" onclick="w3_close()" class="w3-bar-item w3-button"> WHAT WE DO</a>
  <a href="#explore" onclick="w3_close()" class="w3-bar-item w3-button"> EXPLORE</a>
  <a href="#search" onclick="w3_close()" class="w3-bar-item w3-button"> SEARCH</a>
  <a href="#startaproject" onclick="w3_close()" class="w3-bar-item w3-button"> START A PROJECT</a>
  <a href="#login" onclick="w3_close()" class="w3-bar-item w3-button"> LOG IN</a>
  <a href="#signup" onclick="w3_close()" class="w3-bar-item w3-button"> SIGN UP</a>
</nav>

<!-- Header with full-height image -->

<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
<div class = "img1">
<img src="audience.png" alt="Paris" style="width:25%; " class = "img1">
<h1 style = "text-align:center; color:white;"> Welcome to Fundstarter! </h1>
<h4 style = "text-align:center; color:white;"> What are you crowdfunding for? </h4>
</div>
<br>
</br>
<div class="row">
  <div class="column">
  <a href="CreateAProject.php"> 	
    <h2></h2></a>
    <p></p>

  </div>
  <div class="column" style = "border: 1px solid;">
    <a href="CreateAProject.php"> 	
    <h2>Create a Project!</h2></a>
    <p>Fundstarter is a crowdfunding platform helping entrepreneurial ideas come to life.</p>

  </div>
    <div class="column" style = "border: 1px solid;">
  <a href="FundAProject.php">
    <h2>Fund a Project!</h2></a>
    <p>Fundstarter is the world's largest and most trusted free social fundraising platform too.</p>
  </div>
    <div class="column">
  <a href="FundAProject.php">
    <h2></h2></a>
    <p></p>
  </div>
    </div>


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

</body>
</html>
