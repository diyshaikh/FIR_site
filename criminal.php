<?php

include ("db_connect.php") ;

      $Criminal_Name = $_POST['Criminal_Name'];
      $Date = $_POST['Date'];
      $Criminal_FIR = $_POST['Criminal_FIR'];
      $Type = $_POST['Type'];
      $Crime = $_POST['Crime'];
      $IPC_app = $_POST['IPC_app'];
      $insert = mysqli_query($connect, "INSERT INTO criminal_data(Criminal_Name, Date, Criminal_FIR,Type, Crime, IPC_app) VALUES('$Criminal_Name', '$Date', '$Criminal_FIR', '$Type', '$Crime', '$IPC_app')");
    
    if($insert) {
        header('location: home.php');
      }
      else{
        echo 'could not connect';      

        
      }