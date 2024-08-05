<?php
    include_once'config.php';
?>
<?php
    $q_id=$_GET['id'];
    $query="delete from award where awardID='$q_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"<script>alert('Record Deleted!');window.location.href ='adminAwards.php';</script>";
    }else{
        echo"<script>alert('Error in Delete.');window.location.href = 'admin@editAwards.php';</script>";
    }

    mysqli_close($conn);
?>