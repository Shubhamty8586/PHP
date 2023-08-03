<?php
echo "Welcome to PHP Tutorial on functions <br>";
function processMarks($marks){
    $sum = 0;
    foreach ($marks as $value) {
        # code...
        $sum += $value;
    }
    return $sum;
}
$rohan = Array(80, 90, 95, 85, 70);
$sumMarks = processMarks($rohan);

echo "Total Marks Scored by Rohan Out of 500 is $sumMarks <br>";
$harry = Array(75, 60, 55, 50, 65);
$sumMarks = processMarks($harry);
echo "Total Marks Scored by Rohan Out of 500 is $sumMarks <br>";


function avgMarks($marks){
    $sum = 0;
    $i =1;
    foreach ($marks as $value) {
        # code...
        $sum += $value;
        $i ++;
    }
    return $sum/$i;
}
$rohan = Array(60, 20, 40, 10, 90, 80);
$sumMarks = avgMarks($rohan);

echo "Total Marks Scored by Rohan Out of 500 is $sumMarks <br>";
$harry = Array(70, 50, 20, 50, 30);
$sumMarks = avgMarks($harry);
echo "Total Marks Scored by Harry Out of 500 is $sumMarks <br>";
?>