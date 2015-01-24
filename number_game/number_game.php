<?php
session_start();


echo "POST INFO:<br>";
var_dump($_POST);
echo '<br>';
echo "SESSION INFO<br>";
var_dump($_SESSION);


if(!isset($_SESSION['random_number']))
{
	$_SESSION['random_number'] = rand(0,100);
} 
var_dump($_SESSION['random_number']);


if(isset($_POST['number_guess'])) 
{
	$_SESSION['number_guess'] = intval($_POST['number_guess']);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Number Game</title>
	<link rel="stylesheet" type="text/css" href="number_game.css">
</head>
<body id="container">
	<h1>Welcome to the Great Number Game!</h1>
	<h3>I am thinking of a number between 1 and 100..</h3>
	<div>
		<h4>Take a guess!</h4>
		<form action="#" method="post">
			<input type="text" name="number_guess" placeholder="type in your number!">
			<input type="submit" value="Submit">
		</form>
<?php
		if(($_SESSION['number_guess']) > ($_SESSION['random_number']))
		{
		?>	
			<h2 class="high">Your guess is too high!</h2>
<?php
				unset($_SESSION['number_guess']);
		}
		elseif(($_SESSION['number_guess']) < ($_SESSION['random_number']))
		{
		?>	
			<h2 class="low">Your guess is too low!</h2>
<?php
			unset($_SESSION['number_guess']);
		}
		else
		{
		?>	
			<h2 class="correct">Your guess is correct!</h2>
<?php
			unset($_SESSION['number_guess']);
		}
		?>
	</div>
</body>
</html>


