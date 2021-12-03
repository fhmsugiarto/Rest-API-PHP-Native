<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    $server = "localhost";
    $username = "root";
    $password = "toor";
    $database = "universitas";

    $conn = mysqli_connect($server, $username, $password, $database);
    if(!$conn){
        die("Can't connect to database");

    }
?>