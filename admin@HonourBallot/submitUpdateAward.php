<?php
    include_once "config.php";
?>

<?php
    $awardID = mysqli_real_escape_string($conn, $_GET["field0"]);
    $awardName = mysqli_real_escape_string($conn, $_GET["field1"]);
    $des = mysqli_real_escape_string($conn, $_GET["field2"]);

    $sql = "UPDATE award SET  awardName= '$awardName', awardDes = '$des' WHERE AwardID = '$awardID'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('FAQ Updated Successfully!'); window.location.href ='adminAwards.php';</script>";
    } else {
        echo "<script>alert('Error in Update!');window.location.href = 'admin@editAwards.php';</script>";
    }

    // Close the connection
    mysqli_close($conn);
?>