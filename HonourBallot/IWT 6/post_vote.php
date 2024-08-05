<?php
  include_once "config1.php";
?>

<?php
  $awardname = $_POST["category"];
  $candidatename = $_POST["candidates"];
  $voter_id = $_POST["voter_id"];
  $vote_id = $_POST["vote_id"];
  $date = $_POST["date"];
  $time = $_POST["time"];

  $sql = "INSERT INTO votep1 (awardname,candidatename,voter_id,vote_id,date,time) 
  VALUES ('$awardname','$candidatename','$voter_id','$vote_id','$date','$time')";

  if($conn->query($sql)== TRUE){
    echo "Thanks for your vote";
  }
  else {
    echo "Error: ". $sql . "<br>" . $conn->error;
  }

  $conn->close();

   
?>
