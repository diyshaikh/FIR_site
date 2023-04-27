<?php

require("db_connect.php");

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($connect, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($connect, $password);
$password = md5($password);


$query = "SELECT ID, NAME, EMAIL FROM USERS WHERE EMAIL='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($connect, $query)or die($mysqli_error($connect));
$num = mysqli_num_rows($result);

?>


<?php

if ($num == 0) {
  //$error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: home.php');
} 
else {  
	$row = mysqli_fetch_array($result);

	$_SESSION['email'] = $row['EMAIL'];
	$_SESSION['id'] = $row['ID'];
	$_SESSION['name'] = $row['NAME'];
	//echo '<script type="text/javascript">play_sound();</script>';
		
	$email = $_SESSION['email'];
	$value = rand();
	$_SESSION['value'] = $value;
	$accesslog = "INSERT INTO ACCESSLOGS(ID, USER, LOGGEDIN) VALUES ('$value', '$email', NOW())";
	$run_accesslog = mysqli_query($connect, $accesslog) or die(mysqli_error($connect));
		
		
	header('location: success.php');

}

?>