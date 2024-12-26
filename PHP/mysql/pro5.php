<?php
    /*
        create new database with PDO
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO("mysql:host=$hostname", $username, $password);

        $sqlQuery = "create database 224mysql";
        $conn->exec($sqlQuery);
    }catch(PDOException $err){
        echo "<hr> Error is $err";
    }

    $conn = null;
?>