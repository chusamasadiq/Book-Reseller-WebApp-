<?php
    $database = "mysql:host=localhost;dbname=books";
    $username = "root";
    $password = NULL;
    $conn = new PDO($database, $username, $password);
    if(!$conn){
        die("Connection failed");
    }
?>

<!-- $database = "mysql:host=localhost;dbname=u647922126_shoppyzone";
    $username = "u647922126_user";
    $password = "@Usama830";
    $conn = new PDO($database, $username, $password);
    if(!$conn){
        die("Connection failed");
    } -->
