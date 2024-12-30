<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "224mysql";

    $conn = new mysqli($hostname, $username, $password, $database);
    if($conn->connect_error){
        die("Error while Connecting with Database Server ".$conn->connect_error);
    }

    $sqlQuery = "delete from students where id > 60";
    if($conn->query($sqlQuery) === true){
        echo "Total ".$conn->affected_rows." Rows Are Deleted in Table";
    }else{
        echo "Error while Deleting Records";
    }
    
    $conn->close();
?>