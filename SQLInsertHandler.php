<?php
//Jason Savath
//Lab 8

// Obtain a connection object by connecting to the db
$connection = @mysqli_connect ('localhost', 'root',
'password', 'simple_jotdb'); // please fill these parameters with the actual data
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
$first_Name = $_REQUEST['first_Name'];
$last_Name = $_REQUEST['last_Name'];
$course_Id = $_REQUEST['course_Id'];
$course_Name = $_REQUEST['course_Name'];
$notes = $_REQUEST['notes'];

//Query
$query = "INSERT INTO simple_table VALUES ('$student_Id', '$first_Name', '$last_Name','$course_Id', '$course_Name', '$notes');";


//Submit query
mysqli_query($connection,$query);
echo "Inserted successfully into the database";
include 'simple_homepage.php';
?>
