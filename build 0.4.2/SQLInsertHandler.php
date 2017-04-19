<?php
if(!session_id()) session_start();
include("global.php");


$host = $_SESSION['host'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$db_name = $_SESSION['db_name'];
$tbl_name = $_SESSION['tbl_name'];


// Obtain a connection object by connecting to the db
$connection = @mysqli_connect ($host, $username,
$password, $db_name); // please fill these parameters with the actual data
// if(mysqli_connect_errno())
// {
//  echo "<h4>Failed to connect to MySQL: </h4>".mysqli_connect_error();
// }
// else
// {
//  echo "<h4>Successfully connected to MySQL: </h4>";
// }

//Variables
$student_Id = $_REQUEST['student_Id'];
$PasswordHash = $_REQUEST['PasswordHash'];
$first_Name = $_REQUEST['first_Name'];
$last_Name = $_REQUEST['last_Name'];


//Query
$query = "INSERT INTO simple_table VALUES ('$student_Id','$PasswordHash','$first_Name','$last_Name');";

mysqli_query($connection,$query);


//Submit query

include 'created_redirect.html';
?>
