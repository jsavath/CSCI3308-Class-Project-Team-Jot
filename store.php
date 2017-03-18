<html>
<head>
<title> Jot Homepage </title>

<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.mi
n.js"></script>

<script>
$(document).ready(function(){
 $('.button').click(function(){
 var clickBtnName = $(this).attr('name');
 var ajaxurl = 'http://localhost/SQLDeleteHandler.php';
 var data = {'id': clickBtnName};
 $.post(ajaxurl, data, function(response) {
 window.location.href="http://localhost/store.php";
});
});
});
</script>

</head>
<body>
<?php
// Obtain a connection object by connecting to the db
$connection = @mysqli_connect ('127.0.0.1','root',
'password', 'Jot_Database'); // please fill these parameters with the actual data
if(mysqli_connect_errno())
{
 echo "<h4>Failed to connect to MySQL: </h4>".mysqli_connect_error();
}
else
{
 echo "<h4>Successfully connected to MySQL: </h4>";
}
// Query and result set

$query = "Select * from store;";
$resultset = mysqli_query($connection,$query);

//Display table and delete button
while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM)) {
	echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]."<input type=\"submit\" class=\"button\" name=\"".$row[0]."\"
value=\"delete\"/><br>";
}


?>

<!-- WRITE FORM-->

<form enctype="multipart/form-data"
action="http://localhost/SQLInsertHandler.php">
<p>Student Id:&nbsp <input type="text" name="Id" size="10" maxlength="11"
/></p>
<p>First Name:&nbsp <input type="text" name="First_Name" size="10"
maxlength="20" /></p>
<p>Last Name:&nbsp <input type=”text” name=”Last_Name” size=”10” 
maxlength=”20” /></p>
<p>Course Id:&nbsp <input type="text" name="Course_Id" size="10"
maxlength="10" /></p>
<p>Course Name:&nbsp <input type=”text” name=”Course_Name” size=”10” 
maxlength=”20” /></p>
<p>Notes:&nbsp <input type=”text” name=”Notes” size=”50” 
maxlength=”100” /></p>
<br>
<input type="submit" value="Add item" /> &nbsp
<input type="reset" />
</form>



</body>
</html>
