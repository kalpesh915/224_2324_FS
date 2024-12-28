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

    $sqlQuery = "insert into students (fname, lname, city, email) values ('Bhavya', 'Dava', 'Morbi', 'bhavya@gmail.com'); 
    insert into students (fname, lname, city, email) values ('Bhavin', 'Thakar', 'Rajkot', 'bhavin@gmail.com'); 
    insert into students (fname, lname, city, email) values ('nisarg', 'kapupara', 'rajkot', 'nisarg@gmail.com'); 
    insert into students (fname, lname, city, email) values ('Bhavya', 'Dava', 'Morbi', 'bhavya@gmail.com');
    insert into students (fname, lname, city, email) values ('yash', 'chavda', 'Morbi', 'yash@gmail.com');
    insert into students (fname, lname, city, email) values ('yash', 'single', 'rajkot', 'yash@gmail.com');";

    if($conn->multi_query($sqlQuery) === true){
        echo "<hr> New Student Created";
    }else{
        echo "<hr> Error while create new student";
    }

    $conn->close();
?>