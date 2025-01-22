<?php
    session_start();
    ob_start();

    if(isset($_SESSION["loginuser"])){
        require_once("classes/AdminUsers.class.php");
        $adminusers->logWriter($_SESSION["loginuser"], "Logout Successfully");
        unset($_SESSION["loginuser"]);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Success</strong> : Logout Successfully 
        </div>";
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Error</strong> : Invalid Logout Attempt
        </div>";
    }

    header("location:index");
?>