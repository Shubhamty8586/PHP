<?php
echo "Welcome to Multi Dimensional Arrays in PHP <br>";

// Creating a 2 Dimensional Array
$multiDim = array(array(2,6,8,4), array(1,3,5,7), array(9,11,0,15));
echo $multiDim[0][3];
echo "<br>";

// Printing the Contents of a 2 dimensional Array
for ($i=0; $i < count($multiDim); $i++) {
    echo var_dump($multiDim[$i]);
    echo "<br>"; 
}

for ($i=0; $i < count($multiDim); $i++) {
    for ($j=0; $j < count($multiDim[$i]); $j++) {
    echo $multiDim[$i] [$j];
    echo " ";
    } 
     echo "<br>"; 
}
?>