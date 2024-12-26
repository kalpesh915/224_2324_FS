<?php
    // Example (PDO) PHP Data Objects

    $hostname = "localhost";
    $username = "root";
    $password = "";

    // create connection
    try{
        $connection = new PDO("mysql:host=$hostname;", $username, $password);
    }catch(PDOException $err){
        echo "<hr> Error is $err";
    }
    echo "<hr> Database Server Connected with PHP PDO";

    $connection = null;

    /**
     *PDO
     * $connection = new PDO("mysql:host=$hostname;", $username, $password);
     *MySqli OOP
     * $connectio = new mysqli(hostname, username, password);
     * MySqli POP
     * $connection = mysqli_connect(hostname, username, password);
     */
?>