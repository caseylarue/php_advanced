<?php
session_start();

if(isset($_POST['music']))
{
	$_SESSION['music'] = $_POST['music'];
}
if(isset($_POST['color']))
{
	$_SESSION['color'] = $_POST['color'];
}


?>