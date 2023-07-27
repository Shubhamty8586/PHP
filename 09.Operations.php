<?php
// Operators in PHP
// 1. Arithmetic Operators

$a = 45;
$b = 8;
echo "For a+b, the result is " . ($a + $b) ."<br>";
echo "For a-b, the result is " . ($a - $b) ."<br>";
echo "For a*b, the result is " . ($a * $b) ."<br>";
echo "For a/b, the result is " . ($a / $b) ."<br>";
echo "For a%b, the result is " . ($a % $b) ."<br>";
echo "For a**b, the result is " . ($a ** $b) ."<br>";

// 2. Assignment Operators

// $x = $a;
// echo "For x, the result is " . $x ."<br>";
// $a += 6;
// echo "For x, the result is " . $a ."<br>";
// $a -= 6;
// echo "For x, the result is " . $a ."<br>";
//  $a *= 6;
// echo "For x, the result is " . $a ."<br>";
// $a /= 5;
// echo "For x, the result is " . $a ."<br>";
$a %= 5;
echo "For x, the result is " . $a ."<br>";

// 3. Comparision Operators

$x = 20;
$y = 20;
echo "For x==y, the result is ";
echo var_dump($x==$y);
echo "<br>";

echo "For x > y, the result is ";
echo var_dump($x > $y);
echo "<br>";

echo "For x < y, the result is ";
echo var_dump($x < $y);
echo "<br>";

echo "For x <> y, the result is ";
echo var_dump($x <> $y);
echo "<br>";

echo "For x >= y, the result is ";
echo var_dump($x >= $y);
echo "<br>";

echo "For x <= y, the result is ";
echo var_dump($x <= $y);
echo "<br>";

// 4. Logical Operators

$m = false;
$n = true;

echo "For m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is ";
echo var_dump($m || $n);
echo "<br>";

echo "For !m, the result is ";
echo var_dump(!$m);
echo "<br>";


?>