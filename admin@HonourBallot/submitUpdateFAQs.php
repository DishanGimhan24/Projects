<?php
    include_once "config.php";
?>

<?php
    $faqID = mysqli_real_escape_string($conn, $_GET["field0"]);
    $faq = mysqli_real_escape_string($conn, $_GET["field1"]);
    $answer = mysqli_real_escape_string($conn, $_GET["field2"]);

    $sql = "UPDATE faqs SET faqq = '$faq', faqans = '$answer' WHERE faqID = '$faqID'";

    $data=mysqli_query($conn,$sql);
    if ($data) {
        echo "<script>alert('FAQ Updated Successfully!');window.location.href ='adminFAQs.php'; </script>";
    } else {
        echo "<script>alert('Error in Update!');window.location.href = 'admin@edituserq.php';</script>";
    }

    // Close the connection
    mysqli_close($conn);
?>
