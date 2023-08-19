<?php
//Connecting to the Database
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

$sql = "DELETE FROM `phptrip` WHERE `Dest` = 'Rusia' LIMIT 3";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of Affected Rows: $aff <br>";
if ($result){
    echo "Deleted Successfully";
}
else {
    $err = mysqli_error($conn);
    echo "Not Deleted Successfully due to this Error --> $err";
}

?>