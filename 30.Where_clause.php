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
$sql = "SELECT * FROM `phptrip` WHERE `Dest`= 'China'";
$result = mysqli_query($conn, $sql);

//Usage of WHERE Clause to fetch data from the DATABASE
$num = mysqli_num_rows($result);
echo $num;
echo " Records Found in the Database<br>";
$no = 1;
if ($num > 0) {
    while($row = mysqli_fetch_assoc($result)){
      // echo var_dump($row);
      echo $row['S.No'] . " Hello ". $row ['Name'] ." Welcome to ". $row['Dest'];
      echo "<br>";
       $no = $no + 1;
    }
  }
//Usage of WHERE Clause to Update data
$sql = "UPDATE `phptrip` SET `Name` = 'FromBihar' WHERE `Dest` = 'China'";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);

echo "<br>Number of Affected Rows: $aff <br>";
if($result){
    echo "We Updated The Record Successfully";
}
else {
    echo "We Could Not Update The Record Successfully";
}
?>