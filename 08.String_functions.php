<?php
$name = "Harry is a Good Boy";
echo $name;
echo "<br>";
echo "The Length of " ."My String is " . Strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strpos($name, "Harry");
echo "<br>";
echo strrev($name);
echo "<br>";
echo str_replace($name, "Harry", "Rohan");
echo "<br>";
echo str_repeat($name, 4);
echo "<br>";
echo "<pre>";
echo rtrim("    This is a Good Boy    ");
echo "<br>";
echo ltrim("    This is a Good Boy    ");
echo "</pre>";
?>