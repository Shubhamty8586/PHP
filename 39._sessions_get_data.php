<?php
// Start the Session and get the data
session_start();
if (isset($_SESSION['username'])) {

echo "Welcome". $_SESSION['username'];
echo "<br> Your Favourite Category is ". $_SESSION['favCat'] ;
echo "<br>";
}
else{
    echo "Please login to continue";
}
?>