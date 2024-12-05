<?php
    session_start();

    if(isset($_SESSION["validuser"])){
        unset($_SESSION["validuser"]);
        $_SESSION["msg"] = ["type"=> "success", "message"=>"Logout Successfully"];
        header("location:index.php");
    }else{
        $_SESSION["msg"] = ["type"=> "error", "message"=>"Please Login First"];
        header("location:index.php");
    }
?>