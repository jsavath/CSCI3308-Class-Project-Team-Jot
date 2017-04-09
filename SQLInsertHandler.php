<?php

// Obtain a connection object by connecting to the db
$connection = @mysqli_connect ('localhost', 'root',
'alec', 'jot'); // please fill these parameters with the actual data
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
$PasswordHash = $_REQUEST['PasswordHash'];
$first_Name = $_REQUEST['first_Name'];
$last_Name = $_REQUEST['last_Name'];

//Query
$query = "INSERT INTO simple_table (student_Id, PasswordHash, user_id,first_name, last_name, course_Id, course_Name, notes) VALUES('".$student_Id."',SHA512('".$PasswordHash."'),'".$first_Name."','".$last_Name."',NULL, NULL, NULL);";


//Submit query
mysqli_query($connection,$query);
echo "Inserted successfully into the database";
include 'simple_homepage.php';
?>
