<?php
    session_start();

    require_once("menu.php");

    //session_destroy();
    unset($_SESSION["fname"]);

    echo "Session Deleted";
?>