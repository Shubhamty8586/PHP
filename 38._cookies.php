<?php
echo "Welcome to the World of cookies <br>";

// Cookies || Sessions

// Syntax to set a Cookie
// echo time();
setcookie("category", "Books", time() + 86400, "/");
echo "The Cookie is Set <br>";
?>