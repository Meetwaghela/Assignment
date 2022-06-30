<?php 

$server = "localhost";
$user = "root";
$database = "test";

$conn = mysqli_connect($server, $user, "" , $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>