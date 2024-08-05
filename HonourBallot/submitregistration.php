<?php
include_once 'config.php';

$name = $_POST["userName"];
$fname = $_POST["fullName"];
$nic = $_POST["nic"];
$email = $_POST["email"];
$password = $_POST["pwd"];
$re_password = $_POST["repwd"];

// Check if the combination of userName, fullName, and nic already exists in the database
$checkQuery = "SELECT * FROM voter WHERE userName = '$name'AND nic = '$nic'";
$checkResult = mysqli_query($conn, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
    // Display error message if the combination already exists
    echo "<script>alert('Error: This combination of userName, fullName, and NIC already exists.')</script>";
    echo "<script>window.location.href = 'Register_form.php';</script>";
    mysqli_close($conn);
    exit;
}

$sql = "INSERT INTO voter(userId,userName, fullName, nic, email,password) VALUES
('','$name', '$fname', '$nic', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record inserted successfully')</script>";
    
} else {
    echo "<script>alert('Error in insertion: " . mysqli_error($conn) . "')</script>";
}

mysqli_close($conn);
?>
