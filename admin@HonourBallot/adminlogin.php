<?php

if (isset($_POST['login'])) {

      $username = $_POST['username'];
      $password = $_POST['password'];
      if ($username == 'admin' && $password == 'admin') {
            echo "<script>setTimeout(\"location.href='adminPortal.php';\",200);</script>";
      } else {
            echo "<script>alert('Login Failed')</script>";
            echo "<script>setTimeout(\"location.href='home.php';\",500);</script>";
      }
}

?>