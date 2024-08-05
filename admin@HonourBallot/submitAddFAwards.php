<?php
    include_once "config.php";
?>

<?php
    $name = mysqli_real_escape_string($conn, $_POST["field1"]);
    $description = mysqli_real_escape_string($conn, $_POST["field2"]);
    
    // Like-wise other fields
    
    $sql = "INSERT INTO award (AwardID, awardName, awardDes) VALUES ('', '$name', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Award Inserted Successfully!'); window.location.href ='adminAwards.php';</script>";
    } else {
        echo "<script>alert('Error in Insertion!')</script>";
    }

    // Close the connection
    mysqli_close($conn);
?>
