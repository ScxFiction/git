<?php 
include 'database.php'; 

//Check if form submitetd
if(isset($_POST['submit'])){
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$message = mysqli_real_escape_string($con, $_POST['message']);	
}
	//Set timezone
	date_default_timezone_get('Europe/Belgrade');
	$time = date('h;i;s a', time());

	//Valadate input
	if (!isset($user) || $user == '' || !isset($message) || $message == '' ) {
		echo "bad";
	}else{
		echo "god";
	}

?>