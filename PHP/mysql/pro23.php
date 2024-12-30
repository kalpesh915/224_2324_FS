<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    try{
        $conn = new PDO("mysql:host=$hostname; dbname=$database;", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
        
        // Prepared Statement in PDO
        $statement = $conn->prepare("insert into students (fname, lname, city, email) values (:fname, :lname, :city, :email)");

        $statement->bindParam(":fname", $fname);
        $statement->bindParam(":lname", $lname);
        $statement->bindParam(":city", $city);
        $statement->bindParam(":email", $email);

        $fname = "Keyur";
        $lname = "Ramani";
        $city = "Rajkot";
        $email = "Keyur@gmail.com";
        $statement->execute();

        echo "<hr> New Record Created in Database";
    }catch(Exception $err){
        $conn->rollBack();
        echo "<hr> Error is $err";
    }

    $conn = null;
?>