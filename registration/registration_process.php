<?php
session_start();




if( (isset($_POST['action'])) && $_POST['action'] == 'register')
{
	$errors = array();

	/// check to see if the forms are empty
	if(empty($_POST['email']) || empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['password']) || empty($_POST['birth_date']) )
	{
		$errors['email'] = "you left a field empty";
	}

	//check to see if email address is bad
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$errors['email'] = "your email address is bad!";
	}

	// check to see if name contains number
	if( is_numeric($_POST['first_name']) )
	{
		$errors['first_name'] = "Your first name contains a number";
	}

	if( is_numeric($_POST['last_name']) )
	{
		$errors['last_name'] = "Your last name contains a number";
	}

	// check to see if password is more than 6 characters
	if( (strlen($_POST['password'])) < 7)
	{
		$errors['password'] = "Your password must be at least 7 characters";
	}

	// check to see if password matches the confirm password
	if($_POST['password'] != $_POST['confirm_password'])
	{
		$errors['password'] = "Your passwords do not match";
	}

	//check to see if the date is valid NEED to explode
	if(!isset($_POST['birth_date']))
	{
		$errors['password'] = "You have not put a birth day";
	}



	if($_FILES['profile_picture']['error'] > 0)
	{
		$errors['profile_picture'] = "You have not uploaded a picture";
	}



	if(count($errors) > 0) 
		{
			$_SESSION['errors']= $errors; 
			header('Location: registration.php');
			die();
		}
	else
		{
			$_SESSION['success'] = "Congrats you are awesome!";
			// header('Location: registration_success.php');
			// die();
		}

}

?>