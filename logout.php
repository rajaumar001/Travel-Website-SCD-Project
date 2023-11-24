<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start(); // Start the session
if (isset($_SESSION['username'])) {
    unset($_SESSION['username']); // Unset the username session variable
}

// Redirect to the login page or any other desired page
header("Location: index.php");
?>