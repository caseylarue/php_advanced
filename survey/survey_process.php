<?php
session_start();
 var_dump($_SESSION);


if (isset($_POST['name'])) {
	$_SESSION['name'] = $_POST['name'];
}
if (isset($_POST['location'])) {
	$_SESSION['location'] = $_POST['location'];
}
if (isset($_POST['language'])) {
	$_SESSION['language'] = $_POST['language'];
}
if (isset($_POST['comment'])) {
	$_SESSION['comment'] = $_POST['comment'];
}

if(!isset($_SESSION['form_counter'])) {
	$_SESSION['form_counter'] = 1;
} else {
	$_SESSION['form_counter']++;
}


?>

<style type="text/css">
#titles, #values {
	display: inline-block;
	vertical-align: top;
}
</style>

<p>Thanks for submitting this form! You have submitted this form <?php echo $_SESSION['form_counter']; ?> times now.</p>

<h3>Submitted Information</h3>
<div id="titles">
<p>Name:</p>
<p>Dojo Location:</p>
<p>Favorite Language</p>
<p>Comment:</p>
</div>
<div id="values">
<h5><?php echo $_SESSION['name']; ?></h5>
<h5><?php echo $_SESSION['location']; ?></h5>
<h5><?php echo $_SESSION['language']; ?></h5>
<h5><?php echo $_SESSION['comment']; ?></h5>
</div>