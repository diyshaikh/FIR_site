<?php

$userName = 'root';
$password = '';
$dsn = 'mysql:host=localhost; dbName=firdbms';

try {

  $conn = new PDO($dsn, $userName, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo "Fail to connect to the database ".$e->POSTMessage();

}

?>