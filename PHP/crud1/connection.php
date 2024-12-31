<?php
    // All code related to database connection

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    $conn = new mysqli($hostname, $username, $password, $database);

    if($conn->connect_error){
        die("Connection Failed ".$conn->connect_error);
    }
?>