<?php
	session_start();
?>

<html>
<head>
	<title>Demo II</title>
</head>
<body>
	<?php
		if(isset($_SESSION['errors']))
		{
			foreach($_SESSION['errors'] as $error)
			{
				echo "<p> $error </p>";
			}
			unset($_SESSION['errors']);
		}
	?>
	<h2>Add some stuff about yourself!</h2>
	<form action='demo_II_b_process.php' method='post'>
		First Name<input type='text' name='first_name'>
		Email<input type='text' name='email'>
		<input type='submit' value='post info!'>
		<input type='hidden' name='action' value='register'>
	</form>
</body>
</html>