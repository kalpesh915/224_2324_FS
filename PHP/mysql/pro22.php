<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    try{
        $conn = new PDO("mysql:host=$hostname; dbname=$database;", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conn->beginTransaction();
        $conn->exec("insert into students (fname, lname, city, email) values ('Keyur', 'Ramani', 'Rajkot', 'keyur@gmail.com')");
        $conn->exec("insert into students (fname, lname, city, email) values ('prince', 'gajipara', 'Rajkot', 'prince@gmail.com')");
        $conn->exec("insert into students (fname, lname, city, email) values ('het', 'manani', 'Rajkot', 'het@gmail.com')");
        $conn->exec("insert into students (fname, lname, city, email) values ('bhavin', 'thakar', 'Rajkot', 'bhavin@gmail.com')");
        $conn->exec("insert into students (fname, lname, city, email) values ('yash', 'chavda', 'Rajkot', 'yash@gmail.com')");
        $conn->commit();
        echo "<hr> New Record Created in Database";
    }catch(Exception $err){
        $conn->rollBack();
        echo "<hr> Error is $err";
    }

    $conn = null;
?>