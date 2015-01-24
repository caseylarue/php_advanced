<?php
session_start();

var_dump($_SESSION['errors']);

?>

<html>
<head>
	<title>Registration</title>
	<style type="text/css">
		#registration {
			width: 500px;
			height: 600px;
			background-color: #FAEBD7;
			padding-top: 10px;
		}

		#registration label, input {
			display: block;
			margin: 10px;
		}

		#submit {
			margin-top: 20px;
			padding: 5px;
		}
		.error {
			background-color: yellow;
		}
	</style>
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
	<h1>Registration Form</h1>
	<form id="registration" action='registration_process.php' method='post' enctype='multipart/form-data'>
		<label for='email'>Email</label>
		<input type='text' name='email'
		<?php 
		// if(array_key_exists('email', $_SESSION['errors'])) {"class='error'";} 
		?> 
		>
		<label for='first_name'>First Name</label>
		<input type='text' name='first_name'>
		<label for='last_name'>Last Name</label>
		<input type='text' name='last_name'>
		<label for='password'>Password</label>
		<input type='text' name='password'>
		<label for='confirm_password'>Confirm Password</label>
		<input type='text' name='confirm_password'>
		<label for='birth_date'>Birth Date</label>
		<input type='date' name='birth_date'>
		<label for='profile_picture'>Profile Picture</label>
		<input type='file' name='profile_picture'>
	<div id='submit'>
		<input type='submit' value='submit'>
		<input type='hidden' name='action' value='register'>
	</div>
	</form>
</body>
</html>