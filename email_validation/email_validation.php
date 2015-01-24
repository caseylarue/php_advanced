<?php
	session_start();
	echo "POST INFO:<br>";
	var_dump($_POST);
	echo '<br>';
	echo "SESSION INFO<br>";
	var_dump($_SESSION);
	session_destroy();

?>

<html>
<head>
	<title>Email Vaildation</title>
</head>
<body>
	<h1>Please enter your email address:</h1>
	<form action="email_process.php" method="post">
		<input type="text" name="email" placeholder="hi@email.com">
		<input type="submit" name="submit">
		<input type="hidden" name="login" value="login">
	</form>
<?php
	if($_SESSION['counter'] = 1) 
	{
?>
		<h3>Sorry, this email <?= $_SESSION['email']?>is not vaild.</h3>
<?
	}
?>
</body>
</html>

