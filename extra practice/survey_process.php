<?php
session_start();


//upon submission set Session variables
if((isset($_POST['initiate'])) && ($_POST['initiate'] == 'register'))
{
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['location'] = $_POST['location'];
	$_SESSION['language'] = $_POST['language'];
	$_SESSION['comment'] = $_POST['comment'];
	header('Location: survey_success.php');
}


// initate a counter and increment for the success.php page
if(!isset($_SESSION['counter']))
{
	$_SESSION['counter'] = 1;
}
else
{
	$_SESSION['counter']++;
}

// a Go Back on the success.php page
if((isset($_POST['action'])) && ($_POST['action'] == 'back'))
{
	header('Location: survey.php');
	session_destroy();
	die();
}


?>