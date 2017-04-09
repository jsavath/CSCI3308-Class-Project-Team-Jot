<!DOCTYPE html>
<html>
<head>
  <link href="jot_home.css" rel="stylesheet">

  <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
 $('.button').click(function(){
 var clickBtnName = $(this).attr('name');
 var ajaxurl = 'http://localhost/SQLDeleteHandler.php';
 var data = {'student_Id': clickBtnName};
 $.post(ajaxurl, data, function(response) {
 window.location.href="http://localhost/simple_homepage.php";
});
});
});
</script>

</head>

<header class="header_main">

  <div class="Jot">
    <h1><a href="jot_home.html" style="text-decoration:none">JOT!</a></h1>
  </div>

  <nav class="main_nav"> <! Navigation Bar >
    <ul>
      <li><a href="about_us.html" style="text-decoration:none">About Us</a></li>

      <li><a href="#contact_us_page" style="text-decoration:none">Contact Us</a></li>

      <li><a href="#sign_in_page" style="text-decoration:none">Sign In</a></li>
    </ul>
  </nav>
</header>





<body>
<img src='jot_background1.png' style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'>


<?php
// Obtain a connection object by connecting to the db
// Define database access:
DEFINE ('host', 'localhost');
DEFINE ('user', 'root');
DEFINE ('password', 'alec');
DEFINE ('dbName', 'jot');



$connection = @mysqli_connect (host,user,password,dbName); // please fill these parameters with the actual data
if(mysqli_connect_errno())
{
 echo "<h4>Failed to connect to MySQL: </h4>".mysqli_connect_error();
}
else
{
 echo "<h4>Successfully connected to MySQL: </h4>";
}
// Query and result set

$query = "Select * from simple_table;";
$resultset = mysqli_query($connection,$query);

//Display table and delete button
while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM)) {
  echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]."  ".$row[4]." ".$row[5]."<input type=\"submit\" class=\"button\" name=\"".$row[0]."\"
value=\"delete\"/><br>";
}


?>




<!-- WRITE FORM-->
<center>
<form enctype="multipart/form-data"
action="http://localhost/SQLInsertHandler.php">
<p>Student Id:&nbsp <input type="text" name="student_Id" size="10" maxlength="11"
/></p>
<p>Password:&nbsp <input type="password" name="PasswordHash" size="10"
maxlength="15" /></p>
<p>First Name:&nbsp <input type="text" name="first_Name" size="10"
maxlength="20" /></p>
<p>Last Name:&nbsp <input type="text" name="last_Name" size="10" 
maxlength=”20” /></p>
<br>
<input type="submit" value="Create User" /> &nbsp
<input type="reset" />
</form>

<!-- <form method="post" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
<tr>
<td width="246">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile">
</td>
<td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
</tr>
</table>
</form> -->
</center>



<div id="footer">
  <br>    
  <img src="//localhost/logo.png" />
</div>

</body>


</html>
