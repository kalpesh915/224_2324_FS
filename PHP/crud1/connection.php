<?php
    // All code related to database connection

    $hostname = "localhost";
    $dbusername = "root";
    $password = "";
    $database = "224mysql";

    $conn = new mysqli($hostname, $dbusername, $password, $database);

    if($conn->connect_error){
        die("Connection Failed ".$conn->connect_error);
    }
?>