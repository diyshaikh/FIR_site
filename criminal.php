<?php
include ("db_connect.php");
      $Name = $_POST['Name'];
      $Date = $_POST['Date'];
      $Criminal_FIR = $_POST['Criminal_FIR']; 
      $Type = $_POST['Type'];
      $Crime = $_POST['Crime'];
      $IPC_app = $_POST['IPC_app'];

    
  
      $insert = mysqli_query($connect, "INSERT INTO criminal_data (Name, Date, Criminal_FIR,Type, Crime, IPC_app) VALUES ('$Name','$Date','$Criminal_FIR','$Type','$Crime','$IPC_app' )");


        
      if($insert) {
        header('location: end.html');
      }
      else{
        echo ' Sorry cannot connect '
     ;      

      }

?>