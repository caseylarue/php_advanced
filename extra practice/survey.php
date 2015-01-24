<?php
session_start();


?>


<html>
<head>
	<title>Survey</title>
	<style type="text/css">
		#container {
			height: 500px;
			width: 600px;
			background-color: #FAEBD7;
		}
		form {
			border: 1px solid black;
			height: 400px;
			width: 400px;	
		}
		label, input, select, textarea {
			display: block;
			margin: 10px;
		}


	</style>
</head>
<body>
	<div id="container">
		<h1>Fill out this awesome survey!</h1>
		<form action="survey_process.php" method="post">
			<label for="name">Your Name:</label>
			<input type="text" name="name">
			<label for="location">Dojo Location:</label>
			<select name="location">
				<option value="silicon_valley">Silicon Valley</option>
				<option value="seattle">Seattle</option>
				<option value="los_angeles">Los Angeles</option>
			</select>
			<label for="location">Favorite Language:</label>
			<select name="language">
				<option value="javascript">JavaScript</option>
				<option value="ruby">Ruby</option>
				<option value="Node">Node</option>
			</select>
			<label for="comment">Comment</label>
			<textarea name="comment" id="comment"></textarea>
			<input type="submit" value="Submit!">
			<input type="hidden" name="initiate" value="register">
		</form>
	</div>
</body>
</html>