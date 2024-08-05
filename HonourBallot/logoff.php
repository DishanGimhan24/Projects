<?php
session_start(); // Start the session

// Destroy the session data
session_destroy();

// Redirect to a login page or any other desired page
header("Location: home.php");
exit();
?>