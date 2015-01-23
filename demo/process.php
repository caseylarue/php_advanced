<?php
session_start();

echo "SERVER INFO<br>";
var_dump($_SERVER);
echo "<br>";
echo "REQUEST INFO:<br>";
var_dump($_REQUEST);
echo "<br>";
echo "GET INFO:<br>";
var_dump($_GET);
echo "<br>";
echo "POST INFO:<br>";
var_dump($_POST);
echo "<br>";
if(isset($_POST['music']))
{
	$_SESSION['music'] = $_POST['music'];
}
if(isset($_POST['color']))
{
	$_SESSION['color'] = $_POST['color'];
}
echo "<br>";
echo "FILE INFO:<br>";
var_dump($_FILES);
echo "<br>";
echo "COOKIE INFO<br>";
var_dump($_COOKIE);
echo "<br>";
echo "SESSION INFO<br>";
var_dump($_SESSION);
?>