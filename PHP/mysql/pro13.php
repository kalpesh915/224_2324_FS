<?php
    /* Insert multiple data in table */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    $conn = new mysqli($hostname, $username, $password, $database);

    if($conn->connect_error){
        die("Connection Failed ". $conn->connect_error);
    }

    $sqlQuery = "insert into students (fname, lname, city, email) values 
    ('Bhavya', 'Dava', 'Morbi', 'bhavya@gmail.com'),
    ('Bhavin', 'Thakar', 'Rajkot', 'bhavin@gmail.com'),
    ('nisarg', 'kapupara', 'rajkot', 'nisarg@gmail.com'),
    ('Bhavya', 'Dava', 'Morbi', 'bhavya@gmail.com'),
    ('yash', 'chavda', 'Morbi', 'yash@gmail.com'),
    ('yash', 'single', 'rajkot', 'yash@gmail.com');";

    if($conn->multi_query($sqlQuery) === true){
        echo "<hr> New Student Created";
    }else{
        echo "<hr> Error while create new student";
    }

    $conn->close();
?>