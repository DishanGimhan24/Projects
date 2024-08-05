<?php
    include_once'config.php';
?>
<?php
    $q_id=$_GET['id'];
    $query="delete from userquestion where qID='$q_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"<script>alert('Record Deleted!');window.location.href = 'adminUserQuestion.php';</script>";
    }else{
        echo"<script>alert('Error in Delete.');window.location.href = 'admin@edituserq.php';</script>";
    }

    mysqli_close($conn);
?>