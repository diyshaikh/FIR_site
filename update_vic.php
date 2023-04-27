<?php
session_start();
include("db_connect.php");

if(isset($_POST['Victim_FIR'])) {
  $Victim_FIR = $_POST['Victim_FIR'];
  $query = "SELECT * FROM victim_data WHERE Victim_FIR = '" . mysqli_real_escape_string($connect, $Victim_FIR) . "'";
  $query2 = "SELECT * FROM criminal_data WHERE Criminal_FIR = '" . mysqli_real_escape_string($connect, $Victim_FIR) . "'";

  $result = mysqli_query($connect, $query);
  $result2 = mysqli_query($connect, $query2);

  if(mysqli_num_rows($result) and mysqli_num_rows($result2) > 0) {
    $_SESSION['victim_data'] = mysqli_fetch_assoc($result);
    $victim_data = $_SESSION['victim_data'];
    $_SESSION['criminal_data'] = mysqli_fetch_assoc($result2);
    $criminal_data = $_SESSION['criminal_data'];
  }
}

?>


<!DOCTYPE html>  
 <html>  

      <head>   
           <title>First Information Report</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <link rel="stylesheet" href="joining.css">

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
<style>
   
		.button-container {
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 0px;
		}
          .btn {

  background-color: #4ca2cd; /* Green */
  border: none;
  color: white;
  width: 100px; /* Fixed width */
  height: 50px; /* Fixed height */
  text-align: center;
  text-decoration: none;
  display: block;
  font-size: 16px;
  margin: 20px ;
  position: relative;
  left: -0px;
  top: -10px;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s ease;
          }
  

  .btn:hover {
			background-color: #3e8e41; /* Darker green */
		}
</style>

           <title>First Information Report</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body class="body">  
           <br />  <div class="div0">
          
    <div class="container" style="height: 700px; overflow-y: scroll;">  
      <h1>Victim Data</h1>
      <?php if(isset($victim_data) && isset($criminal_data)): ?>
  <form method="post" action="update_vic_process.php">
    <div class="form-group">
      <h4> Victim Details</h4>
      <label for="name"> Name:</label>
      <input type="text" class="form-control" id="name" name="Name" value="<?php echo $victim_data['Name']; ?>">
    </div>
    <div class="form-group">
      <label for="place">Address:</label>
      <input type="text" class="form-control" id="place" name="Place" value="<?php echo $victim_data['Place']; ?>">
    </div>
    <div class="form-group">
      <label for="name">Statement:</label>
      <input type="text" class="form-control" id="Statement" name="Statement" value="<?php echo $victim_data['Statement']; ?>">
    </div>
    <div class="form-group">
      <label for="name">District:</label>
      <input type="text" class="form-control" id="District" name="District" value="<?php echo $victim_data['District']; ?>">
    </div>
    <div class="form-group">
      <label for="name">Aadhar number:</label>
      <input type="text" class="form-control" id="UID" name="UID" value="<?php echo $victim_data['UID']; ?>">
    </div>
    <div class="form-group">
      <h4> Criminal Details</h4>
      <label for="name"> Name:</label>
      <input type="text" class="form-control" id="Criminal_Name" name="Criminal_Name" value="<?php echo $criminal_data['Criminal_Name']; ?>">
    </div>
    <div class="form-group">
      <label for="name">Date:</label>
      <input type="text" class="form-control" id="Date" name="Date" value="<?php echo $criminal_data['Date']; ?>">
    </div>
    <div class="form-group">
      <label for="name">Type:</label>
      <input type="text" class="form-control" id="Type" name="Type" value="<?php echo $criminal_data['Type']; ?>">
    </div>
    <div class="form-group">
      <label for="name">Crime:</label>
      <input type="text" class="form-control" id="Crime" name="Crime" value="<?php echo $criminal_data['Crime']; ?>">
    </div>
    <div class="form-group">
      <label for="name">Applied IPC:</label>
      <input type="text" class="form-control" id="IPC_app" name="IPC_app" value="<?php echo $criminal_data['IPC_app']; ?>">
    </div>
    <input type="hidden" name="Victim_FIR" value="<?php echo $Victim_FIR; ?>">
    <button type="submit" name="update" class="btn btn-primary">Update</button>
  </form>
  <?php elseif(empty($victim_data) && empty($criminal_data)): ?>
  <p>No data found for the entered FIR number.</p>
<?php endif; ?>

    </div>
  </body>
</html>
