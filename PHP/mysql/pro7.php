<?php
    /*
        create new Table in database with MySqli OOP
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    $conn = new mysqli($hostname, $username, $password, $database);
    $sqlQuery = "create table students (id int primary key auto_increment, fname varchar(20), lname varchar(20), city varchar(20), email varchar(64), created_at timestamp default current_timestamp, updated_at timestamp default current_timestamp on update current_timestamp)";
    
    if($conn->query($sqlQuery) === true){
        echo "Table Created";
    }else{
        echo "Error while creting Table";
    }

    $conn->close();
?>