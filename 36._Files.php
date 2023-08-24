<?php

$fptr = fopen("myfile.txt", "r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo var_dump(fgets($fptr));

// Reading a File Line By Line
// while ($a=fgets($fptr)) {
//     echo $a;
// }

// echo " End of the file has been reached";

// Reading a File Character By Character
// while ($a=fgetc($fptr)) {
//     echo $a;
//     break;
// }
// echo " End of the file has been reached";

// Write a Program which Reads the Content of a file until has been encountered
while ($a = fgetc($fptr)) {
    echo $a;
    if($a == "."){
        break;
    }
}
fclose($fptr);
?>