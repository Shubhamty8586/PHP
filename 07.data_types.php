<?php 
/* PHP Data Types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. Null
*/ 

// String - Sequence Of Array
$name = "Rohan";
$friend = "Mohan";
echo "$name ka friend is $friend";

// Integer - Non Decimal Number
$income = 455;
$debts = -655;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;

// Float - Decimal Point Number
$income = 344.5;
$debts = -45.5;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Boolean - Can Either Be True or False
$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

// Object - Instances of Classes
// Employee is a class --> harry can be one Object

// Array - used to Store Multiple values in a Single Variables
$friends = array("Shubham", "Mohit", "Aman", "Nitin");
echo Var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
// echo $friends[4]; // Will Throw An Error as the size of the Array is 4

// NULL
$name = NULL;
echo Var_dump($name);
?>