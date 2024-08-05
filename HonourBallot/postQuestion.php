<?php
include_once "config.php";

$email = $_POST["faqmail"];
$question = $_POST["userquestion"];

// Check if the email exists in the database
$sql = "SELECT * FROM voter WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Email exists in the database
    $row = mysqli_fetch_assoc($result);
    $username = $row["userName"];

    // Insert the question into the database
    $sql2 = "INSERT INTO userquestion (qID, userName, question, answer) VALUES ('', '$username', '$question','Yet to Answer')";

    if (mysqli_query($conn, $sql2)) {
        echo "<script>alert('Record Inserted Successfully! You can watch your questions on My Questions category in user dropdown menu.');window.location.href = 'MyQuestions.php';</script>";
        
        exit;
    } else {
        echo "<script>alert('Error in Insertion!Try Agin!');window.location.href = 'FAQs.php';</script>";
    }
} else {
    echo "<script>alert('Email does not exist as useraccount! If you are registered please entere given account if you are not please register to use this feature.')</script>";
    //header("Location: Home.php"); // Redirect to login page
}

// Close the connection
mysqli_close($conn);
?>
