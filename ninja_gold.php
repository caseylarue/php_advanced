<?php
session_start();


?>


<html>
<head>
	<title>Ninja Gold</title>
</head>
<body>
	<form action="process.php" method="post">
		<label for="gold">Your Gold</label>
		<input type="text" name="gold"> 
	</form>
	<div>
		<form action="process.php" method="post">
			Farm (earns 10-20 golds)
			<input type="hidden" name="building" value="farm">
			<input type="submit" value="find gold!"> 
		</form>
		<form action="process.php" method="post">
			Cave(earns 5-10 golds)
			<input type="hidden" name="building" value="cave">
			<input type="submit" value="find gold!"> 
		</form>
		<form action="process.php" method="post">
			House(earns 2-5 golds)
			<input type="hidden" name="building" value="house">
			<input type="submit" value="find gold!"> 
		</form>
		<form action="process.php" method="post">
			Casino(earns/takes 0-50 golds)
			<input type="hidden" name="building" value="casino">
			<input type="submit" value="find gold!"> 
		</form>
	</div>
</body>
</html>