<?php
//Jason Savath
//Lab8

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
$Id = $_REQUEST['id'];

//Write query
$query = "DELETE FROM simple_table WHERE id='$Id';";

//Do query
mysqli_query($connection,$query);
echo "Deleted successfully from the database";
?>

