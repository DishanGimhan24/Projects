<?php

// Include the database configuration file
include_once 'config.php';
session_start();
$username = $_SESSION['username'];
  $userid = $_SESSION['userid'];
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and sanitize the input values
    $category = $_POST['category'];
    $candidates = $_POST['vote'];
    $currentDateTime = date('Y-m-d H:i:s');

    // Perform any additional validation if needed

    // Prepare the SQL statement
    $sql = "INSERT INTO vote (awardname, candidatename, datetime) VALUES ('$category', '$candidates', '$currentDateTime')";

    // Execute the SQL statement
    if (mysqli_query($conn, $sql)) {
        // Vote successfully recorded
        echo "Vote submitted successfully.";
    } else {
        // Error in recording the vote
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);

?>
