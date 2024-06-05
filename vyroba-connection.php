<?php

$servername = "localhost:3307";
$username = "Daniel";
$password = "daniel";
$db = "products";

$conn = mysqli_connect($servername, $username, $password, $db);


if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}