<?php 
include_once 'config.php';

$email=$_POST["femail"];
$pageLink = $_POST['page_link'];

$sql="INSERT INTO subsemail(submailID,email)Values('','$email')";

	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Subscribed Successfully!');window.location.href = 'Home.php';</script>";
        echo "<script>alert('Subscribed Successfully!'); window.location.href = '".$pageLink."';</script>";
		
	}
	else{
		echo"<script>alert('Error in Insertion!')</script>";
	}

	//close the connection
	mysqli_close ($conn);



?>