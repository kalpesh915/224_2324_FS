<?php
    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
    <button class='btn-close' data-bs-dismiss='alert'></button>
    <strong>Success</strong> : 
    </div>";

    header("location:");

    $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
    <button class='btn-close' data-bs-dismiss='alert'></button>
    <strong>Error</strong> : 
    </div>";

    header("location:");
?>