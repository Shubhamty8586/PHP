<?php
echo "Welcome to the World of For Each Loops <br>";
$arr = array("Bannana", "Apple", "Mango", "Watermelon");
/*for ($i=0; $i < count($arr) ; $i++) { 
    # code...
    echo $arr[$i];
    echo "<br>";
}*/
// Better Way to do this for each loops
foreach ($arr as  $value) {
    # code...
    echo $value . "<br>";
}
?>