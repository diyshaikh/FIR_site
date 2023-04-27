<?php
session_start();
include("db_connect.php");

if(isset($_POST['update'])) {
  $Victim_FIR = $_POST['Victim_FIR'];
  $Name = $_POST['Name'];
  $Place = $_POST['Place'];
  $Statement = $_POST['Statement'];
  $District = $_POST['District'];
  $UID = $_POST['UID'];
  
  $Criminal_Name = $_POST['Criminal_Name'];
  $Date = $_POST['Date'];
  $Type = $_POST['Type'];
  $Crime = $_POST['Crime'];
  $IPC_app = $_POST['IPC_app'];
  
  $query = "UPDATE victim_data SET Name = '" . mysqli_real_escape_string($connect, $Name) . "', Place = '" . mysqli_real_escape_string($connect, $Place) . "', Statement = '" . mysqli_real_escape_string($connect, $Statement) . "', District = '" . mysqli_real_escape_string($connect, $District) . "', UID = '" . mysqli_real_escape_string($connect, $UID) . "' WHERE Victim_FIR = '" . mysqli_real_escape_string($connect, $Victim_FIR) . "'";
  
  $query2 = "UPDATE criminal_data SET Criminal_Name = '" . mysqli_real_escape_string($connect, $Criminal_Name) . "', Date = '" . mysqli_real_escape_string($connect, $Date) . "', Type = '" . mysqli_real_escape_string($connect, $Type) . "', Crime = '" . mysqli_real_escape_string($connect, $Crime) . "', IPC_app = '" . mysqli_real_escape_string($connect, $IPC_app) . "' WHERE Criminal_FIR = '" . mysqli_real_escape_string($connect, $Victim_FIR) . "'";

  // Display confirmation message before updating victim data
  $result = mysqli_query($connect, $query);
  $result2 = mysqli_query($connect, $query2);

  if ($result && $result2) {
    echo '<script>
      if (confirm("Are you sure you want to update this record?")) {
        alert("Record Updated successfully");
        window.location.href = "home.php";
      } else {
        alert("Record not updated");
      }
    </script>';
  } else {
    echo "Error: " . mysqli_error($connect);
  }
  
  mysqli_close($connect);

}
?>
