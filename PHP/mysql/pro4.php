<?php
    /*
        create new database with mysqli OOP
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($hostname, $username, $password);

    if($conn->connect_error){
        die("<hr> Connection Failed ".$conn->connect_errno);
    }

    $sqlQuery = "create database 224mysql";

    if($conn->query($sqlQuery) === true){
        echo "<hr> Database Created";
    }else{
        echo "<hr> Error while creating Database";
    }

    $conn->close();
?>