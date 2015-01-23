<?php
	session_start();

	if(isset($_SESSION['success']))
	{
		echo "you have successfully registered";
		unset($_SESSION['success']);
	}

	else
	{
		header('location: demo_II.php');
	}

?>