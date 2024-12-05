<?php
    session_start();

    require_once("menu.php");

    $_SESSION["fname"] = "Keyur";
    $_SESSION["lname"] = "Ramani";
    $_SESSION["city"] = "Rajkot";

    echo "Session Created";
?>