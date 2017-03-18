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
$Id = $_REQUEST['Id'];
$First_Name = $_REQUEST['First_Name'];
$Last_Name = $_REQUEST['Last_Name'];
$Course_Id = $_REQUEST['Course_Id'];
$Course_Name = $_REQUEST['Course_Name'];
$Notes = $_REQUEST['Notes'];

//Query
$query = "INSERT INTO simple_table VALUES ('$Id', '$First_Name', '$Last_Name','$Course_Id', '$Course_Name', '$Notes');";


//Submit query
mysqli_query($connection,$query);
echo "Inserted successfully into the database";
include 'simple_homepage.php';
?>
