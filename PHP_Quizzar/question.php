<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP QUEZZER</title>
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
			<div class="current">Question 1 of 5</div>
			<p class="question">
				What does PHP stand for?
			</p>
			<form method="post" action="process.php">
				<ul class="choices">
					<li><input name="choice" type="radio" value="1" />PHP: Hypertext Processor</li>
					<li><input name="choice" type="radio" value="1" />Privete Home Page</li>
					<li><input name="choice" type="radio" value="1" />Personal Home Page</li>
					<li><input name="choice" type="radio" value="1" />PHP: Hypertext Processor</li>
					<li><input name="choice" type="radio" value="1" />Personal Hypertext Processor</li>
				</ul>
				<input type="submit" value="submit" />
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