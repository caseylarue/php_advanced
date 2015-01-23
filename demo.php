<?php
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Superglobal</title>
</head>
<body>
	<form action="process.php" method="post">
		<div>
			<label for="color">What is your favorite color?</label>
			<inupt type="text" name="color" placeholder="put your color here"></input>
		</div>
		<div>
			<label for="color">What is your favorite type of music?</label>
			<select name="music">
				<option value="hip hop">Hip Hop</option>
				<option value="pop">Pop</option>
				<option value="rock">Rock</option>
				<option value="country">Country</option>
			</select>
		</div>
		<div>
			<input type="submit" value="submit">
		</div>
	</form>
</body>
</html>