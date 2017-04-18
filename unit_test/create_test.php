<?php
  $connection = @mysqli_connect ('localhost', 'root',
'password', 'jot');

  if(mysqli_connect_errno())
{
 echo "<h4> Failed to connect to MySQL: </h4>".mysqli_connect_error();
}
else
{
 echo "<h4> Successfully connected to MySQL: </h4>";
}

$query = "INSERT INTO simple_table VALUES ('192837465','test1','test1','test1');"; // Tests a normal case

$resultset = mysqli_query($connection,$query);

if($resultset > 0)
{
    echo "Test 1 passed: Correct input test (should pass)<br>";
}
else 
{
    echo "Test 1 failed : Check you table field for proper type<br>";
}

$query = "DELETE from simple_table;";
mysqli_query($connection,$query);

$query = "INSERT INTO simple_table VALUES ('91@@@3423','test2','test2','test2');";// Test for wrong input type : student_Id with symblos

$resultset = mysqli_query($connection,$query);
if($resultset > 0)
{
    echo "test 2 passed: Bad input test (should fail)<br>";
}
else 
{
    echo "Test 2 failed : Bad input for student_Id (should fail)<br>";
}
$query = "DELETE from simple_table;";
mysqli_query($connection,$query);

$query = "INSERT INTO simple_table VALUES ('192abc465','test3','test3','test3');";// Test for wrong input type :  with letters

$resultset = mysqli_query($connection,$query);
if($resultset > 0)
{
    echo "Test 3 passed: Bad input test (should Fail)<br>";
}
else 
{
    echo "Test 3 failed : This should fail bad input letters in numbers for student_Id<br>";
}
$query = "DELETE from simple_table;";
mysqli_query($connection,$query);

$query = "INSERT INTO simple_table VALUES ('192834765','','test4','test4');"; // Test for wrong input type : Blank password field

$resultset = mysqli_query($connection,$query);
if($resultset > 0)
{
    echo "Test 4 passed: blank input test {password} (should fail)<br>";
}
else 
{
    echo "Test 4 failed : should fail blank input for password<br>";
}
$query = "DELETE from simple_table;";
mysqli_query($connection,$query);

$query = "INSERT INTO simple_table VALUES ('','test5','test5','test5');";// Test for wrong input type : blank student ID

$resultset = mysqli_query($connection,$query);
if($resultset > 0)
{
    echo "test 5 passed: blank input test {student_Id} (should fail)<br>";
}
else 
{
    echo "Test 5 failed : Should fail blank student id<br>";
}
$query = "DELETE from simple_table;";
mysqli_query($connection,$query);

$query = "INSERT INTO simple_table VALUES ('192873465','TEST6','TEST6','TEST6');"; // Test for wrong input type : Capital letters in name and pasword

$resultset = mysqli_query($connection,$query);
if($resultset > 0)
{
    echo "Test 6 passed: Correct input test with capitals (should pass)<br>";
}
else 
{
    echo "Test 6 failed : Check you table field for proper type<br>";
}
$query = "DELETE from simple_table;";
mysqli_query($connection,$query);

$query = "INSERT INTO simple_table VALUES ('19283','7357','7357','7357');"; // Test for wrong input type : numbers in char fields

$resultset = mysqli_query($connection,$query);
if($resultset > 0)
{
    echo "Test 7 passed: Bad input test numbers insted of letter (should fail)<br>";
}
else 
{
    echo "Test 7 failed : Should fail bad input numbers insted of letters<br>";
}
$query = "DELETE from simple_table;";
mysqli_query($connection,$query);

$query = "INSERT INTO simple_table VALUES ('','','','');"; // Test for wrong input type : blank fields

$resultset = mysqli_query($connection,$query);
if($resultset > 0)
{
    echo "test 8 passed: All blank input test (should fail)<br>";
}
else 
{
    echo "Test 8 failed : Should fail all blank input<br>";
}
$query = "DELETE from simple_table;";
mysqli_query($connection,$query);

$query = "INSERT INTO simple_table VALUES ('192837465','test9','test9','');"; // Test for wrong input type : no last name

$resultset = mysqli_query($connection,$query);
if($resultset > 0)
{
    echo "Test 9 passed: blank input test last-name (should fail)<br>";
}
else 
{
    echo "Test 9 failed : should fail blank last-name<br>";
}
$query = "DELETE from simple_table;";
mysqli_query($connection,$query);

$query = "INSERT INTO simple_table VALUES ('','test10','','');";
// Test for missing fields

$resultset = mysqli_query($connection,$query);
if($resultset > 0)
{
    echo "test 10 passed: only password input test (should fail)<br>";
}
else 
{
    echo "Test 10 failed : should fail only a password was entered<br>";
}
$query = "DELETE from simple_table;";
mysqli_query($connection,$query);

$query = "INSERT INTO simple_table VALUES ('','','test11','');";
// Test for missing fields

$resultset = mysqli_query($connection,$query);
if($resultset > 0)
{
    echo "test 11 passed: only first-name (should fail)<br>";
}
else 
{
    echo "Test 11 failed : should fail only a first name was entered<br>";
}
$query = "DELETE from simple_table;";
mysqli_query($connection,$query);

$query = "INSERT INTO simple_table VALUES ('','','','test12');";
// Test for missing fields

$resultset = mysqli_query($connection,$query);
if($resultset > 0)
{
    echo "test 12 passed: only last name (should fail)<br>";
}
else 
{
    echo "Test 12 failed : should fail only a last name was entered<br>";
}
$query = "DELETE from simple_table;";
mysqli_query($connection,$query);

  ?>