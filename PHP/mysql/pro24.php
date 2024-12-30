<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    try{
        $conn = new PDO("mysql:host=$hostname; dbname=$database;", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
        
        // Select Data from table with PHP PDO

        //$statement = $conn->prepare("select * from students");
        //$statement = $conn->prepare("select * from students where fname = 'yash'");
        //$statement = $conn->prepare("select * from students order by fname");
        //$statement = $conn->prepare("select * from students order by fname desc");
        $statement = $conn->prepare("select * from students order by fname desc limit 10");
        $statement->execute();


        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);

        //print_r($result);
        echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>City</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>";
        foreach($statement->fetchAll() as $key => $value){
            //echo "<hr>";print_r($value);
            echo "<tr>
                <td>$value[id]</td>
                <td>$value[fname]</td>
                <td>$value[lname]</td>
                <td>$value[city]</td>
                <td>$value[email]</td>
                <td>$value[created_at]</td>
                <td>$value[updated_at]</td>
            </tr>";
        }
        echo "</table>";
    }catch(Exception $err){
        $conn->rollBack();
        echo "<hr> Error is $err";
    }

    $conn = null;
?>