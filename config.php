<?php 

$server = "localhost:3307";
$username = "Daniel";
$password = "daniel";
$database = "comment_system";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>