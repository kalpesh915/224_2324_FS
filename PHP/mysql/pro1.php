<?php
    // MySQLi Object-Oriented

    $hostname = "localhost";
    $username = "root";
    $password = "";

    // create connection
    $connection = new mysqli($hostname, $username, $password);


    // check
    if($connection->connect_error){
        die("Error while connecting with Server ".$connection->connect_error);
    }

    echo "Database Server Connected";

    $connection->close();
?>