<?php
//Jason Savath
//Lab 8

// Obtain a connection object by connecting to the db
$connection = @mysqli_connect ('127.0.0.1', 'root',
'password', 'lab8'); // please fill these parameters with the actual data
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
$Name = $_REQUEST['Name'];
$Quantity = $_REQUEST['Quantity'];
$Price = $_REQUEST['Price'];

//Query
$query = "INSERT INTO store VALUES ('$Id', '$Name', '$Quantity','$Price');";


//Submit query
mysqli_query($connection,$query);
echo "Inserted successfully into the database";
include 'store.php';
?>
