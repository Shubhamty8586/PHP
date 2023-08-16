<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";

// Create a Connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection Was not Successfull
if(!$conn) {
    die ("Sorry We Failed to connect: ". mysqli_connect_error());
}
else {
echo "Connection Was Successfull <br>";
}

// SQL Query to be Executed
$name = "Visha";
$destination = "Rusia";
$sql = "INSERT INTO `phptrip` (`Name`, `Dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);
// Add a new trip to the Trip table in the Database
if($result) {
    echo "The Record has been inserted Successfully! <br>";
}
else {
    echo "The Record was not inserted Successfully Because of this Error --> " . mysqli_error($conn);
}
 ?>