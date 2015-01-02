<?php include 'database.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP QUEZZER Final</title>
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
			<h2>You're Done!</h2>
				<p>Congrats! You have comleted the test</p>
				<p>Final Score: <?php echo $_SESSION['score']; ?></p>
				<a href="question.php?n=1" class="start" >Take Again</a>
		</div>	
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2015, ScxPhpWorkOut
		</div>
	</footer>
</body>
</html>		