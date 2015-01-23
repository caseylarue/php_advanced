<?php
	session_start();


	if(!isset($_SESSION['counter']))
	{
		$_SESSION['counter'] = 1;
	}
	else
	{
		$_SESSION['counter']++;
	}
?>


<html>
<head>
	<title>Counter</title>
	<style type="text/css">
		div {
			height: 50px;
			width: 50px;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<h1>You visited the site</h1>
	<div> 
<?php
	 if(!isset($_SESSION['counter']))
	 {
	 	echo "0";
	 }
	 else
	 {
	 	echo $_SESSION['counter'];
	 }
?>
	</div>
	<h3>times</h3>
	<form action="counter_process.php" method="post">
		<input type="submit" value="Reset">
		<input type="hidden" name="action" value="counter">
	</form>
</body>
</html>