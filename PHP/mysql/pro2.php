<?php
    // MySQLi Procedural

    $hostname = "localhost";
    $username = "root";
    $password = "";

    // create connection
    $connection = mysqli_connect($hostname, $username, $password);

    // check
    if(!$connection){
        die("Connection Failed ".mysqli_connect_error());
    }

    echo "Database Server Connected";


    mysqli_close($connection);
?>