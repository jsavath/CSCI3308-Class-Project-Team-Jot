<?php

$host="localhost"; // Host name 
$username="root";  //Mysql password
$password="alec"; // Mysql password 
$db_name="jot"; // Database name 
$tbl_name="simple_table"; // Table name //tb1_name = memebers?

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$student_id=$_POST['student_id']; 
$PasswordHash=$_POST['PasswordHash']; 

// To protect MySQL injection (more detail about MySQL injection)
$student_id = stripslashes($student_id);
$PasswordHash = stripslashes($PasswordHash);
$student_id = mysql_real_escape_string($student_id);
$PasswordHash = mysql_real_escape_string($PasswordHash);
$sql="SELECT * FROM $tbl_name WHERE student_id='$student_id' and PasswordHash='$PasswordHash'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $username and $PasswordHash, table row must be 1 row
if($count==1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['student_id'] = $student_id;
    
    header('Location:Login_screen.php');
}
else{
	echo "A Problem Occured";

	header('Location:Login_screen.php');
}
?>


