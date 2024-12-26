<?php
    /*
        Insert data in Table of database MySqli OOP
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    $conn = new mysqli($hostname, $username, $password, $database);
    $sqlQuery = "insert into students (fname, lname, city, email) values ('Het', 'Manani', 'Rajkot', 'het@gmail.com')";

    if($conn->query($sqlQuery) === true){
        echo "<hr> New Student Created with ".$conn->insert_id." ID";
    }else{
        echo "<hr> Error while creating new Student";
    }

    $conn->close();
?>