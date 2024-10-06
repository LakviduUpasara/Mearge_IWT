<?php

session_start();

session_unset(); 
session_destroy();

// Delete cookies if set (optional)
if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    setcookie('email', '', time() - 3600, "/"); // Expire the email cookie
    setcookie('password', '', time() - 3600, "/"); // Expire the password cookie
}

// Redirect to the login page or any other page after logout
header("Location: index.php");
exit();
?>
