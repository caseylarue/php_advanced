<?php
	session_start();
	// session_destroy();

	$_SESSION['counter'] = 0;

	if(!filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)) 
	{
		$_SESSION['counter'] = 1;
		header('Location: email_validation.php');
	}
	else
	{
		$_SESSION['email'] = $_POST['email'];
		header('Location: email_success.php');
		(die);		
	}

		 
?>