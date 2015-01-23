<?php
	session_start();

	if((isset($_POST['action'])) && $_POST['action'] == 'register')
	{
		//empty array
		$errors = array();

		// First name validation - check to see if a field is not left blank
		if(empty($_POST['first_name']))
		{
			$errors[] = "you left first name blank!";
		}

		//validate email
		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$errors[] = "your email address is bad!";
		}

		if(count($errors) > 0) 
		{
			$_SESSION['errors'] = $errors; 
			header('Location: demo_II_b.php');
			die();
		}
		else
		{
			$_SESSION['success'] = "Congrats you are awesome!";
			header('Location: demo_II_b_success.php');
			die();
		}
	}

?>

