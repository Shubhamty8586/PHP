<?php
//include '_dbconnect.php';
require '_dbconnect.php';

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

//find the number of returns returned
$num = mysqli_num_rows($result);
echo $num;
echo " Records Found in the Database<br>";
while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo " Hello ". $row ['Name'] ." Welcome to ". $row['Dest'];
    echo "<br>";
  }
?>