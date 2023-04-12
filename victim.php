<?php

include ("db_connect.php") ;

      $Name = $_POST['Name'];
      $Place = $_POST['Place'];
      $Victim_FIR = $_POST['Victim_FIR'];
      $Statement = $_POST['Statement'];
      $District = $_POST['District'];
      $UID = $_POST['UID'];
      $insert = mysqli_query($connect, "INSERT INTO victim_data(Name, Place, Victim_FIR,Statement, District, UID) VALUES('$Name', '$Place', '$Victim_FIR', '$Statement', '$District', '$UID')");
    
    if($insert) {
        header('location: criminal.html');
      }
      else{
        echo 'could not connect';      

      }