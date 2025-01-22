<?php
    // code for check user session is valid or not
    session_start();
    ob_start();

    date_default_timezone_set("Asia/Kolkata");

    if(isset($_SESSION["loginuser"])){
        $loginuser = $_SESSION["loginuser"];
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Error</strong> : Please Login First
        </div>";
    
        header("location:index");
    }
?>