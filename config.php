<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "kkg_coco_db";

$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

if(!$conn){
    die("Database Connection Failed : " . mysqli_connect_error());
}

?>