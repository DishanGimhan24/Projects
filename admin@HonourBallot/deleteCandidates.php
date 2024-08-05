<?php
    include_once'config.php';
?>
<?php
    $q_id=$_GET['id'];
    $query="delete from candidate where CID='$q_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"<script>alert('Record Deleted!');window.location.href ='nominatorCandidate.php';</script>";
    }else{
        echo"<script>alert('Error in Delete.');window.location.href = 'nominator@editCandidates.php';</script>";
    }

    mysqli_close($conn);
?>