<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "honourballot";

$con = new mysqli($server, $username, $password, $database);

if($con -> connect_error){
    die("ERROR: Could not connect to database." . $con->connect_error);
}
?>