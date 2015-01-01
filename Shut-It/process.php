<?php 
include 'database.php'; 

//Check if form submitetd
if(isset($_POST['submit'])){
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$message = mysqli_real_escape_string($con, $_POST['message']);	

	//Set timezone
	date_default_timezone_get("Europe/Belgrade");
	$time = date("H:i:s", time());

	//Valadate input
	if (!isset($user) || $user == '' || !isset($message) || $message == '' ) {
		//If not fill correctly  urlencode redirect output error message#2
		$error = "Please fill in your name and a message";
		header("Location: index.php?error=".urlencode($error));
		exit();
	}else{
		$query = "INSERT INTO shouts(user, message, time)
			VALUES ('$user', '$message', '$time')";
	//If did not inserted die or redirect back to index.php #1
	if (!mysqli_query($con, $query)) {
				die('Error: ' .mysqli_error($con));
			}else{
				header("Location: index.php");
				exit();
			}		
	}
}
?>