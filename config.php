<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "doctor";

$conn = new mysqli($server, $user, $pass, $database);

if ($conn->connect_error) {
    die("Connection error". $conn->connect_error);
} 

?>


