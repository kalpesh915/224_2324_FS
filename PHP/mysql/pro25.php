<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    try{
        $conn = new PDO("mysql:host=$hostname; dbname=$database;", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
        
        // Update Data in table with PHP PDO

        $statement = $conn->prepare("update students set city = 'Ahamdabad' where id > 50");
        $statement->execute();


        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        echo $statement->rowCount()." Records are Updated";
    }catch(Exception $err){
        $conn->rollBack();
        echo "<hr> Error is $err";
    }

    $conn = null;
?>