<?php
	session_start();
	$_SESSION['loggedin'] = false;

	header('Location:Login_screen.php');
?>