<?php
// Include database connection
include("db_connect.php");

// Check if ID is set
if (isset($_GET['Victim_FIR'])) {
  $Victim_FIR = $_GET['Victim_FIR'];

  // Call stored procedure with the selected ID
  $proc = mysqli_query($connect, "CALL get_details($id)");

  if ($proc) {
    // Retrieve the message from the stored procedure
    $proc_message = mysqli_fetch_assoc($proc);
    $message = $proc_message['message'];
  } else {
    $message = "Error: could not retrieve message";
  }
} else {
  $message = "Please select a valid ID";
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>View Message</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <h1>View Message</h1>
    <p><?php echo $message; ?></p>
    <a href="home.php">Go Back</a>
  </div>
</body>

</html>
