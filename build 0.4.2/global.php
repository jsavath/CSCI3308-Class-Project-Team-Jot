<?php

//Global.php
//Single file for database variable to easily manage password changes between coders

$host="localhost"; // Host name 
$username="root";  //Mysql password
$password="alec"; // Mysql password 
$db_name="jot"; // Database name 
$tbl_name="simple_table"; // Table name //tb1_name = memebers?


if (!session_id()) session_start();


$_SESSION['host'] = $host;
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['db_name'] = $db_name;
$_SESSION['tbl_name'] = $tbl_name;
	

?>