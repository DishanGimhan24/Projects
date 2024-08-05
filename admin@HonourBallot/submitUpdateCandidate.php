<?php
    include_once "config.php";
?>

<?php
    $cID = mysqli_real_escape_string($conn, $_GET["field0"]);
    $cname = mysqli_real_escape_string($conn, $_GET["field1"]);
    $des = mysqli_real_escape_string($conn, $_GET["field2"]);

    $sql = "UPDATE candidate SET  cName= '$cname', cDes = '$des' WHERE CID = '$cID'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('FAQ Updated Successfully!'); window.location.href ='nominatorCandidate.php';</script>";
    } else {
        echo "<script>alert('Error in Update!');window.location.href = 'nominator@editCandidates.php';</script>";
    }

    // Close the connection
    mysqli_close($conn);
?>