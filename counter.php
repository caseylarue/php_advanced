<?php
session_start();


if(!isset($_SESSION['counter'])) {
	$_SESSION['counter'] = 1;
} else {
	$_SESSION['counter']++;
}

?>


<style type="text/css">

h1 {
	border:solid black 1px;
	width:50px;
	text-align: center;
}

</style>

<html>
<head>
	<title>Counter</title>
</head>
<body>
	<h2>You visited the site</h2>
	<h1><?= $_SESSION['counter'] ?></h1>
	<h2>times</h2>
	<form action="counter_process.php" method='post'>
		<input type='submit' value='Reset'>
	</form>
</body>
</html>