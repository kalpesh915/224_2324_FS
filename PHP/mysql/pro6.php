<?php
    /*
        create new Table in database with PDO
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    try{
        $conn = new PDO("mysql:host=$hostname; dbname=$database;", $username, $password);

        $sqlQuery = "create table students (id int primary key auto_increment, fname varchar(20), lname varchar(20), city varchar(20), email varchar(64), created_at timestamp default current_timestamp, updated_at timestamp default current_timestamp on update current_timestamp)";
        $conn->exec($sqlQuery);
        echo "<hr> New Table Created";
    }catch(PDOException $err){
        echo "<hr> Error is $err";
    }

    $conn = null;
?>