<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    $conn = new mysqli($hostname, $username, $password, $database);

    if($conn->connect_error){
        die("connection Failed");
    }
?>