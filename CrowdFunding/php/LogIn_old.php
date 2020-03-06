<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<title>Fundstarter - Crowdfunding System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smooth Sliding Forms template Responsive, Login form web template,Flat Pricing w3tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../css/style_Login.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->

<!-- font-awesome icons -->
<link href="../css/font-awesome_Login.css" rel="stylesheet"> 
<!-- //font-awesome icons -->

<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Cormorant+Unicase:300,400,500,600,700" rel="stylesheet"><!--web font-->
<!-- //web font -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="logo.png" type="image/gif" sizes="160x160">
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
  background-image: url("/w3images/m.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}


</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#" class="w3-bar-item w3-wide"><img src="facebook_cover_photo_1.png" alt="Fundstarter Logo" style="width:auto; height:60px;"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-padding-16 w3-hide-small">
	  <a href="Crowdfunding.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Home</a>
	  <a href="#whatwedo" class="w3-bar-item w3-button"><i class="fa fa-users"></i> What We Do</a>
	  <a href="#explore" class="w3-bar-item w3-button"><i class="fa fa-plane"></i> Explore</a>
	  <a href="#search" class="w3-bar-item w3-button"><i class="fa fa-search"></i> Search</a>


	  <a href="signup.php" class="w3-right w3-bar-item w3-button"><i class="fa fa-user-plus"></i> Sign Up</a>
	  <a href="#login" class="w3-right w3-bar-item w3-button"><i class="fa fa-user-circle"></i> Log In</a>
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
  <div class="main agileits-w3layouts">
		<div class="main-agileinfo"> 
			<div class="agileui-forms">
				<div class="container-form">
					<div class="form-item log-in"><!-- login form-->
						<div class="w3table agileinfo"> 
							<div class="w3table-cell register"> 
								<div class="w3table-tophead">
									<h2>Welcome back!</h2>
								</div>
								<form action="UserLogInResult.php" method="post"> 
									<div class="fields-grid">
										<div class="styled-input agile-styled-input-top">
											<input type="text" id="usrname" name="usrname" required>
											<label for="usrname">Username</label>
											<span></span>
										</div>
										<div class="styled-input">
											<!-- <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
											title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> -->
											<input type="password" id="psw" name="psw" required="">
											<label>Password</label>
											<span></span>
										</div>
										<a href="#">Forgot your password?</a>										
										<input type="submit" value="Sign in"> 
										<br></br>
										<?php
									   if(isset($_SESSION['error_user'])){
										$error = $_SESSION['error_user'];
										echo "<span>$error</span>";
									   }										
									?>
									</div>
								</form>  
							</div>
						</div>
					</div>
					<div class="form-item sign-up"><!-- sign-up form-->
						<div class="w3table w3-agileits">
							<div class="w3table-cell register">   
									<h3>Administrator</h3>
							<form action="AdminLogInResult.php" method="post"> 
									<div class="fields-grid">
										<div class="styled-input agile-styled-input-top">
											<input type="text" id="usrname" name="usrname" required>
											<label for="usrname">Username</label>
											<span></span>
										</div>
										<div class="styled-input">
											<!--<input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
											title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> -->
											<input type="password" id="psw" name="psw" required="">
											<label>Password</label>
											<span></span>
										</div>
										<a href="#">Forgot your password?</a>										
										<input type="submit" value="Sign in"> 
									<br></br>
	
									<?php
									   if(isset($_SESSION['error_admin'])){
										$error = $_SESSION['error_admin'];
										echo "<span>$error</span>";
									   }										
									?>
									</div>
								</form> 
							</div>
						</div>
					</div>
				</div>
				<div class="container-info">
					<div class="info-w3lsitem">
						<div class="w3table">
							<div class="w3table-cell">
								<p> Are you a</p>
								<p> normal user? </p>
								<div class="btn"> Sign in </div>
							</div>
						</div>
					</div>
					<div class="info-w3lsitem">
						<div class="w3table">
							<div class="w3table-cell">
								<p> Are you an admin?</p>
								<div class="btn">Yes, I am!</div>
							</div>
						</div>
					</div>
					<div class="clear"> </div>
				</div> 
				
				
			</div> 
		</div>	
	</div>   
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

<script  src="../js/jquery-1.12.3.min.js"></script> 
	<script>
		$(".info-w3lsitem .btn").click(function() {
			  $(".main-agileinfo").toggleClass("log-in");
			});
			$(".container-form .btn").click(function() {
			  $(".main-agileinfo").addClass("active");
		});
	</script>
<!--	
 <script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script> -->
    <!-- Login AJAX -->
    <script src="assets/js/login.js"></script>

</body>
</html>
