<?php
  include_once "config.php";
?>

<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $sql = "INSERT INTO cont_us (fb_id,fb_name,fb_email,msg) VALUES ('','$name','$email','$message')";

   mysqli_query($conn, $sql);
?>
