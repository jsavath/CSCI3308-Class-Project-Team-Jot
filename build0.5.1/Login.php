<?php

if(!session_id()) session_start();
include("global.php");


$host = $_SESSION['host'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$db_name = $_SESSION['db_name'];
$tbl_name = $_SESSION['tbl_name'];

//$host="localhost"; // Host name 
//$username="root";  //Mysql password
//$password="alec"; // Mysql password 
//$db_name="jot"; // Database name 
//$tbl_name="simple_table"; // Table name //tb1_name = memebers?




// Connect to server and select databse.
$connection = @mysqli_connect ($host, $username,$password, $db_name);

// username and password sent from form 
$student_id=$_REQUEST['student_id']; 
$PasswordHash=$_REQUEST['PasswordHash']; 

//SQL query
$sql="SELECT * FROM $tbl_name WHERE student_id='$student_id' and PasswordHash='$PasswordHash'";
echo $sql;
mysqli_query($connection, $sql);

session_start();
$_SESSION['loggedin'] = true;
$_SESSION['student_id'] = $student_id;
header('Location:Login_screen.php');

?>


