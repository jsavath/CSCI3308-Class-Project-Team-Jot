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
if(mysqli_connect_errno())
{
 echo "<h4>Failed to connect to MySQL: </h4>".mysqli_connect_error();
}
else
{
 echo "<h4>Successfully connected to MySQL: </h4>";
}

//Variables
$student_Id = $_REQUEST['student_Id'];

//Write query
$query = "DELETE FROM simple_table WHERE student_Id='$student_Id';";

//Do query
mysqli_query($connection,$query);
echo "Deleted successfully from the database";
include 'jot_home.php';
?>
