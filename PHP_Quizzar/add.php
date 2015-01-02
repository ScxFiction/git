<?php include 'database.php'; ?>
<?php 
	if (isset($_POST['submit'])) {
		echo "Submit was clicked";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP QUEZZER Add</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<header>
		<div class="conteiner">
			<h1>PHP Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>Add A Question</h2>
			<form method="post" action="add.php" />
				<p>
					<label>Question Number</label>
					<input type="number" name="question_number" />
				</p>
				<p>
					<label>Question Text</label>
					<input type="text" name="question_text" />
				</p>
				<p>
					<label>Choice #1</label>
					<input type="text" name="choice1" />
				</p>
				<p>
					<label>Choice #2</label>
					<input type="text" name="choice2" />
				</p>
				<p>
					<label>Choice #3</label>
					<input type="text" name="choice3" />
				</p>
				<p>
					<label>Choice #4</label>
					<input type="text" name="choice4" />
				</p>
				<p>
					<label>Choice #5</label>
					<input type="text" name="choice5" />
				</p>
				<p>
					<label>Correct Choice Number: </label>
					<input type="number" name="correct_choice" />
				</p>
				<p>
					<input type="submit" name="submit" value="Submit" />
				</p>												
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