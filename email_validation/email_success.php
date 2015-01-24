<?php
	session_start();
	echo "POST INFO:<br>";
	var_dump($_POST);
	echo '<br>';
	echo "SESSION INFO<br>";
	var_dump($_SESSION);
	// session_destroy();

?>



<html>
<head>
	<title>Success</title>
</head>
<body>
	<h1>Success</h1>
	<h2>The email address <?= $_SESSION['email'] ?> is valid.</h2>
</body>
</html>