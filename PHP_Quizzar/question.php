<?php include 'database.php'; ?>
<?php 
	//Set qustion number
	$number = (int) $_GET['n'];
	/*
	*  Get Question
	*/
	$query = "SELECT * FROM questions
				WHERE question_number = $number";
	// Get result
	$result = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$question = $result->fetch_assoc();

	/*
	*  Get Choises
	*/
	$query = "SELECT * FROM choices
				WHERE question_number = $number";
	// Get result
	$choises = $mysqli->query($query) or die ($mysqli->error.__LINE__);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP QUEZZER Question</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<header>
		<div class="conteiner">
			<h1>PHP Quizzer Question</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="current">Question 1 of 5</div>
			<p class="question">
				<?php echo $question['text']; ?> <!-- Question from DataBase --> 
			</p>
			<form method="post" action="process.php">
				<ul class="choices">
					<?php while ($row = $choises->fetch_assoc()) : ?>
						<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
					<?php endwhile; ?>
				</ul>
				<input type="submit" value="Submit" />
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2014, ScxPhpWorkOut
		</div>
	</footer>
</body>
</html>