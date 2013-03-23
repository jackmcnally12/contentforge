<?php
// ContentForge 0.1.1
// Admin backend login
// Takes login data from HTML form, matches it against database

include '/includes/mysql.php'; # Only change if user data is stored elsewhere.

$username = "($_POST ['username'])"; # Must match the HTML form!
$password = "($_POST ['password'])"; # Also must match the HTML form!

$con=mysqli_connect("$host","$db_user","$pwd","$db");

if (mysqli_connect_errno($con))
  {
  echo "The database connection failed! Check the login data in /includes/mysql.php: " . mysqli_connect_error();
  }

$tbl_name = "admins";

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql); 

$count=mysql_num_rows($result);

if($count==1)

{    
session_register("myusername");
session_register("mypassword"); 
echo "Login Successful!";
}

else

{
echo "Wrong Username or Password";
}




?>
