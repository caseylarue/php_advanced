<?php
session_start();


?>

<html>
<head>
	<title>Success</title>
	<style type="text/css">

	</style>
</head>
<body>
	<div id="confirm">
		<h1>Thanks for submitting this form!  You have submitted this <?= $_SESSION['counter'] ?> times now!</h1>
	</div>
	<div id="data">
		<p>Name: <?= $_SESSION['name'] ?></p>
		<p>Dojo Location: <?= $_SESSION['location'] ?></p>
		<p>Favorite Language: <?= $_SESSION['language'] ?></p>
		<p>Comment: <?= $_SESSION['comment'] ?></p>
	</div>
	<form action="survey_process.php" method="post">
		<input type="submit" value="back">
		<input type="hidden" name="action" value="back">
	</form>
</body>
</html>