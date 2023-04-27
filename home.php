<?php
 include("db_connect.php");
 $sql = mysqli_query($connect, "SELECT * FROM victim_data");
 ?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/fav.png">
	<meta name="author" content="codepixer">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	<title>Home</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	 <link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css"> 
	 <link rel="stylesheet" href="css/bootstrap.css"> 
	 <link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/home.css"> 

	 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
	<link href="joining.css" rel="stylesheet"> 
 
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
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

	 <title>First Information Report</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
	<style>
		.button-container {
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 0px;
               position: relative;
               top:100px;  

		}

		.btn {
			background-color
: white; /* Green */
  border: none;
  color: black;
  width: 210px; /* Fixed width */
  height: 50px; /* Fixed height */
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px;
  position: relative;
  top: 10px;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

		.btn:hover {
			background-color: #3e8e41; /* Darker green */
		}
	</style>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      </head>
      <body class="body">
           <br/> 
            <div class="div0">

          <div>
          <div class="container" style="height: 500px; overflow-y: scroll;">
                <h1 >First Information Report</h1><br />
                <div class="table-responsive">
                     <table class="table table-striped">
                          <tr>
                               <th>FIR number</th>
                               <th>Victim's Name</th>
                               <th>Place of crime</th>
                               <th>Statement of victim</th>
                               <th>District</th>
                          </tr>

                          <?php

      if(mysqli_num_rows($sql) > 0){
      while($fetch_message = mysqli_fetch_assoc($sql)){

   ?><tr>
    <td><?php echo $fetch_message["Victim_FIR"];?></td>
   <td><?php echo $fetch_message["Name"];?></td>
   <td><?php echo $fetch_message["Place"];?></td>
   <td><?php echo $fetch_message["Statement"]; ?></td>
   <td><?php echo $fetch_message["District"];?></td>




</tr>
                          <?php
                               }
                          }

                          ?>
                     </table>
                </form>
                <br><br>
                
        </div>
        
     </div>
      </body>
      <div class="button-container">
    <button class="btn" onclick="window.location.href='victim.html'">Add</button>
    <button class="btn" onclick="window.location.href='search.php'">Search and update FIR</button>
    <button class="btn" onclick="window.location.href='joining.php'">Complete FIR</button>
    <button class="btn" onclick="window.location.href='delete_vic.php'">Delete Victim data</button>
    <button class="btn" onclick="window.location.href='delete_cri.php'">Delete Criminal data</button>

            </div>  
 </html>
                         