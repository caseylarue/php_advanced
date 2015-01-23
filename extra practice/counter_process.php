<?php
	session_start();

	if((isset($_POST['action'])) && ($_POST['action'] == 'counter'))
	{
		unset($_SESSION['counter']);
		header('Location: counter.php');
		die();
	}
?>
