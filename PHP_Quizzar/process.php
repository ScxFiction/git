<?php include 'database.php'; ?>
<?php session_start(); ?> <!-- You gota start a session if you gona use $_SESION variable -->
<?php  
	//Check to see if score is set_error_handler
	if (!isset($_SESION['score'])) {
		$_SESION['score'] = 0;
	}

	if ($_POST) {
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
	
		echo $number . '<br>';
		echo $selected_choice;

	}

?>
