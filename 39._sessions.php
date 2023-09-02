<?php
// What is a Session?
// Used to manage information across difference pages

// Verify the user login info
session_start();
$_SESSION['username'] = "Harry";
$_SESSION['favCat'] = "Books";
echo "We have Saved Your Session";
?>