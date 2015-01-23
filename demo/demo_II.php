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
				echo "<p>" . $error . "</p>";
			}

			unset($_SESSION['errors']);

		}
	?>
	<form action="demo_II_process.php" method="post">
		First name<input type='text' name='first_name'>
		Email<input type='text' name='email'>
		<input type='submit' value='POST INFO!'>
		<input type='hidden' name='action' value='register'>
	</form>
</body>
</html>