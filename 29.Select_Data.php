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
$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

//find the number of returns returned
$num = mysqli_num_rows($result);
echo $num;
echo " Records Found in the Database<br>";
// Display the Rows Returned by the SQL Query
// if ($num > 0) {
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
// }
// We can fetch in a Better Way using the While Loop
if ($num > 0) {
  while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['S.No'] . " Hello ". $row ['Name'] ." Welcome to ". $row['Dest'];
    echo "<br>";
  }
}
?>