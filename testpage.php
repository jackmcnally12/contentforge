<?php
# Testing database connection.
# If databases were created properly, this page will work.
# If not, follow the directions in install.txt.

$host = 'localhost';        # Only change if host != localhost
$db_user = 'your_username'; # Your MySQL username
$pwd = 'your_password';     # Your MySQL password
$db = 'contentforge';       # Leave this alone

mysqli_connect($host,$username,$password);
@mysqli_select_db($db) or die("Unable to select database!");

$query = "SELECT * FROM $db WHERE TestValue = '1'";
$result=mysqli_query($query);

$num=mysqli_numrows($result);

if ($num='')

{
    echo "Test Value not found! Check your database configuration";
    
}

else

{ 
    echo "Test Successful! \n Delete this file and continue with setup";
}

mysqli_close();

?>
