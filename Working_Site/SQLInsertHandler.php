<?php

// Obtain a connection object by connecting to the db
$connection = @mysqli_connect ('localhost', 'root',
'Vespa1019', 'jot'); // please fill these parameters with the actual data
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


//Submit query

include 'created_redirect.html';
?>
