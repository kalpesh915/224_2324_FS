<?php
    /*
        Insert data in Table of database with PDO
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    try{
        $conn = new PDO("mysql:host=$hostname; dbname=$database", $username, $password);
        $sqlQuery = "insert into students (fname, lname, city, email) values ('Het', 'Manani', 'Rajkot', 'het@gmail.com')";
        $conn->exec($sqlQuery);
        echo "New Student Created ";
    }catch(PDOException $err){
        echo "Error is $err";
    }
?>