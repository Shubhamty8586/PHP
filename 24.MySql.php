<?php 
echo "Welcpme to the stage where we are ready to get connected to a database <br>";

/* Ways to Connect to a MySQL Database
1. MYSQLi extension
2. PDO
*/
// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "tr";

// create a Connection
$conn = mysqli_connect($servername, $username, $password);

//Die if connection Was not Successfull
if(!$conn){
    die("Sorry We Failed to connect:". mysqli_connect_error());
}
else{
echo "Connection Was Successfull";
}
?>