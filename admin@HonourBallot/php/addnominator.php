<?php

include_once 'config.php';

if (isset($_POST['add'])) {

    $name=$_POST['name'];
	$nic=$_POST['nic'];
	$email=$_POST['email'];
	$contactno=$_POST['contact'];

    $sql = "INSERT INTO nominator (name , nic , email , contactno)
    VALUES ('$name','$nic','$email','$contactno')";

    if ($con->query($sql) === TRUE) 
    {
        echo "<script>alert('Nominator Added...')</script>";
        echo "<script>setTimeout(\"location.href='../php/nominators.php';\",500);</script>";
    }
    else
    {
        echo "SQL Error";
    }
}

?>