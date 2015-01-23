<?php
session_start();


if(isset($_POST['action']) && $_POST['action'] == 'register')
{

	$errors = array(); /// empty array for validation errors
	// first name validation
	if(strlen($_POST['first_name']) < 2 )
	{
		//add error to array
		$errors[] = "your name must be 2 characters!";
	}

	//validate email
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
	{
		$errors[] = "your email address is bad";
	}

	//if there are any errors at all
	if(count($errors) > 0)	
	{
		$_SESSION['errors'] = $errors;	
		header('location: demo_II.php');
		die();
	}
	else
	{
		$_SESSION['success'] = "Congratulations, you are good at entering data";
		header('location: demo_II_success.php');
		die();
	}
}

?>