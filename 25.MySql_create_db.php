<?php 
// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

// Create a Connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection Was not Successfull
if(!$conn) {
    die ("Sorry We Failed to connect: ". mysqli_connect_error());
}
else {
echo "Connection Was Successfull <br>";
}

// Create a db
$sql = "CREATE DATABASE dbharry9";
$result = mysqli_query($conn, $sql);

// Check for the Database Creation Success
if($result){
    echo "The DB Was Created Successfully!";
}
else {
    echo "The DB was not Created Successfully Because of this Error -->" . mysqli_error($conn);
}
?>