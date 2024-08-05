<?php
session_start(); // Start the session
include_once 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Validate email and password against the database
$sql = "SELECT * FROM voter WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Login successful
    $row = mysqli_fetch_assoc($result);
    $username = $row['userName']; // Assuming the column name is 'userName'
    $userid=$row['$userID'];
    
    $_SESSION['username'] = $username; // Store the username in the session
    $_SESSION['userid']=$userid;

    echo "<script>alert('Login successful')</script>";
    // Rest of your code for the successful login page
    header("Location: home.php"); // Redirect to success page
} else {
     // Login failed
     echo "<script>alert('Invalid email or password')</script>";
    header("Location: loginTried.php"); // Redirect to login page
    
}

mysqli_close($conn);
?>
