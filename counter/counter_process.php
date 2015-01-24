<?php
session_start();
header('Location: counter.php');
session_destroy();
exit;
?>