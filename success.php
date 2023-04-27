<?php
	require("db_connect.php");
	
	// Check if the form has been submitted
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Get the user's login credentials from the form
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// Generate the SQL query to check if the user exists
		$selectQuery = "SELECT * FROM users WHERE username = '" . mysqli_real_escape_string($connect, $username) . "' AND password = '" . mysqli_real_escape_string($connect, $password) . "'";
  
		// Execute the select query
		$result = mysqli_query($connect, $selectQuery);
  
		// If a row was returned, the user exists
		if (mysqli_num_rows($result) == 1) {
		  // Store the user's ID in a session variable
		  $row = mysqli_fetch_assoc($result);
		  $_SESSION['forensicid'] = $row['id'];
		  
		  // Redirect the user to the success page
		  header('location: success.php');
		} else {
		  // Display an error message
		  $errorMessage = 'Invalid username or password.';
		}
		
?>


<!DOCTYPE html>
	<audio style="display:none;" controls autoplay>
		<source src="accessgranted.wav" type="audio/wav" autostart="true"> 
	</audio>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title> Welcome Officer </title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/denied.css">
		</head>
		<body>

			  

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay"></div>	
				<div class="container">
				
					<div class="row fullscreen d-flex align-items-center justify-content-start">
					
						<div class="banner-content col-lg-10 text-center">

								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<br/>
								<a class="btn btn-warning btn-lg" href="home.php" role="button"> Welcome Officer </a>
							
						</div>							
					</div>
					
				</div>					
			</section>
			<!-- End banner Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
			
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>			
	</body>
</html>