<?php
    /*
        Insert data in Table of database with MySqli OOP
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    $conn = new mysqli($hostname, $username, $password, $database);
    $sqlQuery = "insert into students (fname, lname, city, email) values ('Het', 'Manani', 'Rajkot', 'het@gmail.com')";
    
    if($conn->query($sqlQuery) === true){
        echo "Row Created";
    }else{
        echo "Error while creting Row";
    }

    $conn->close();
?>