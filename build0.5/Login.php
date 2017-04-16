<?php

DEFINE ('host', 'localhost');
DEFINE ('user', 'root');
DEFINE ('password', 'password');
DEFINE ('dbName', 'jot');

// Connect to server and select databse.
$connection = @mysqli_connect (host,user,password,dbName); // please fill these parameters with the actual data
    if(mysqli_connect_errno())
    {
      echo "<h4>Failed to connect to MySQL: </h4>".mysqli_connect_error();
    }
    else
    {
      echo "<h4>Successfully connected to MySQL: </h4>";
    }

// username and password sent from form 
$student_id=$_REQUEST['student_id']; 
$PasswordHash=$_REQUEST['PasswordHash']; 

$query="SELECT * FROM simple_table WHERE student_id='$student_id' and PasswordHash='$PasswordHash'";
mysqli_query($connection,$query);
session_start();
$_SESSION['loggedin'] = true;
$_SESSION['student_id'] = $student_id;

header('Location:Login_screen.php');
?>
