<?php
echo "Welcome to Associative Array in PHP <br>";
// $arr = array("this", "that", "what");
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];

// Associative Arrays
$favCol = array('Shubham' => 'green', 'Rohit' => 'red', 'Vishal' => 'blue', 8 => 'yellow');
// echo $favCol['Shubham'];
// echo "<br>";
// echo $favCol['Rohit'];
// echo "<br>";
// echo $favCol['Vishal'];
// echo "<br>";
// echo $favCol[8];

foreach ($favCol as $key => $value){
echo "Favourite Colour Of $key is $value <br>";
}
?>