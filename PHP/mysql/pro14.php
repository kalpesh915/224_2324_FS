<?php
    /* Insert row with Prepared Statement with Mysql OOP */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    $conn = new mysqli($hostname, $username, $password, $database);

    if($conn->connect_error){
        die("Connection Failed ". $conn->connect_error);
    }

    // statement create
    $prepare = $conn->prepare("insert into students (fname, lname, city, email) values (?,?,?,?)");

    // bind parameters
    $prepare->bind_param("ssss", $fname, $lname, $city, $email);

    // build values
    $fname = "Rajiv";
    $lname = "Shekh";
    $city = "Rajkot";
    $email = "Rajiv@gmail.com";

    if($prepare->execute()){
        echo "<hr> New Student Created";
    }else{
        echo "<hr> Error while create new student";
    }

    $conn->close();
?>