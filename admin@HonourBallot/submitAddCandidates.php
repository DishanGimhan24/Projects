<?php
    include_once "config.php";
?>

<?php
    $name = mysqli_real_escape_string($conn, $_POST["field1"]);
    $description = mysqli_real_escape_string($conn, $_POST["field2"]);
    
    // Like-wise other fields
    
    $sql = "INSERT INTO candidate (CID, CName, cDes) VALUES ('', '$name', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Candidate Inserted Successfully!'); window.location.href ='nominatorCandidate.php';</script>";
    } else {
        echo "<script>alert('Error in Insertion!')</script>";
    }

    // Close the connection
    mysqli_close($conn);
?>
