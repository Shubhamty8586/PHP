<?php
echo "Welcome to local/global vars in PHP <br>";

 $a= 98; // Global variable
echo $a;
function printValue(){
    $a = 90; // Local variable
    echo "The Value of a Variable is $a <br>";
}
printValue();

$a= 98;
$b = 9; // Global variable
echo $a;
function printValue(){
    global $a, $b;
    // $a = 90; // Local variable
    echo "The Value of a Variable a is $a and b is $b <br>";
}
printValue();

$a= 98;
$b = 9; // Global variable
echo $a;
function printValue(){
    global $a, $b;
     $a = 90; // Local variable
     $b = 100;
    echo "The Value of a Variable a is $a and b is $b <br>";
}
printValue();
echo "The Value of a Variable a is $a and b is $b <br>";
// Echo Var_dump ($Globals);
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
?>