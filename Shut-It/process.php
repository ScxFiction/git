<?php 
include 'database.php'; 

//Check if form submitetd
if(isset($_POST['submit'])){
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$message = mysqli_real_escape_string($con, $_POST['message']);	

	//Set timezone
	date_default_timezone_get('Europe/Belgrade');
	$time = date('h;i;s a', time());

	//Valadate input
	if (!isset($user) || $user == '' || !isset($message) || $message == '' ) {
		echo "bad";
	}else{
		$query = "INSERT INTO shouts(user, message, time)
			VALUES ('$user', '$message', '$time')";
	//If did not inserted die or redirect back to index.php
	if (!mysqli_query($con, $query)) {
				die('Error: ' .mysql_error($con));
			}else{
				header("Location: index.php");
				exit();
			}		
	}
}
?>