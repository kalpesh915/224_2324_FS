<?php
    session_start();

    if(isset($_SESSION["validuser"])){
        $username = $_SESSION["validuser"];
    }else{
        $_SESSION["msg"] = ["type"=> "error", "message"=>"Please Login First"];
        header("location:index.php");
    }
?>