<?php
session_start();

// if(!isset($_SESSION['counter'])) {
// 	$_SESSION['counter'] = 1;
// } else {
// 	$_SESSION['counter']++;
// }

?>



<html>
<head>
	<title></title>
</head>
<body>
	<form action="survey_process.php" method="post">
		Your Name: <input type="text" name="name"><br><br>
		Dojo Location: <select name="location"><br><br>
			<option value="san_jose">San Jose</option>
			<option value="seattle">Seattle</option>
			<option value="los_angeles">Los Angeles</option>
		</select><br><br>
		Favorite Language: <select name="language">
			<option value="javascript">JavaScript</option>
			<option value="php">PHP</option>
			<option value="ruby">Ruby</option>
		</select><br><br>
		Comment (optional):<br><br>
		<textarea name="comment"></textarea><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>