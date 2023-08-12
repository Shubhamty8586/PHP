<?php 
// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry9";

// Create a Connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection Was not Successfull
if(!$conn) {
    die ("Sorry We Failed to connect: ". mysqli_connect_error());
}
else {
echo "Connection Was Successfull <br>";
}

// Create a Table in the DB
$sql = "CREATE TABLE `phptrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT ,
`name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL, PRIMARY KEY(`sno`))";
$result = mysqli_query($conn, $sql);

// Check for the Table Creation Success
if($result){
    echo "The Table Was Created Successfully! <br>";
}
else {
    echo "The Table was not Created Successfully Because of this Error --> " .mysqli_error($conn);
}
?>
