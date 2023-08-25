<?php
// $fptr = fopen("myfile2.txt", "w");
// fwrite($fptr, "This is the Best File on this Planet.
// Please Dont Argue With me On this One.");
// fwrite($fptr, "This is Another Content");
// fclose($fptr);

// Appending to a file in php
$fptr = fopen("myfile2.txt", "a");
fwrite($fptr, "..This is the Best File on this Planet..\n");
fclose($fptr);
?>