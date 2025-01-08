<?php
    require_once("conn.php");

    if(isset($_SERVER["REQUEST_METHOD"]) == "DELETE"){
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $sqlQuery = "delete from users where id = $id";
            $conn->query($sqlQuery);
            $response = ["message" => "Number of ".$conn->affected_rows." Rows Deleted"];
        }else{
            $response = ["message" => "ID Must Required to Delete Data"];
        }
    }else{
        $response = ["message" => "Invalid Method Selected"];
    }

    echo json_encode($response);
?>