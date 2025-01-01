<?php
    session_start();
    ob_start();

    if(isset($_SESSION["loginuser"])){
        $username = $_SESSION["loginuser"];
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Error : </strong> Please Login First</div>";
        header("location:index.php");
    }
?>