<?php
    include_once "config.php";
?>

<?php
    $faq = mysqli_real_escape_string($conn, $_POST["field1"]);
    $answer = mysqli_real_escape_string($conn, $_POST["field2"]);
    
    // Like-wise other fields
    
    $sql = "INSERT INTO faqs (faqID, faqq, faqans) VALUES ('', '$faq', '$answer')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('FAQ Inserted Successfully!'); window.location.href ='adminFAQs.php';</script>";
    } else {
        echo "<script>alert('Error in Insertion!')</script>";
    }

    // Close the connection
    mysqli_close($conn);
?>

