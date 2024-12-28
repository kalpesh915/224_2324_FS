<?php
    /* Get Last Insert id with mysql OOP */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    $conn = new mysqli($hostname, $username, $password, $database);

    if($conn->connect_error){
        die("Connection Failed ". $conn->connect_error);
    }

    $sqlQuery = "insert into students (fname, lname, city, email) values ('Bhavya', 'Dava', 'Morbi', 'bhavya@gmail.com')";

    if($conn->query($sqlQuery) === true){
        echo "<hr> New Student Created";
    }else{
        echo "<hr> Error while create new student";
    }

    $conn->close();
?>