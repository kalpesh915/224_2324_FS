<?php
    session_start();

    require_once("menu.php");

    $_SESSION["fname"] = "Nisarg";
    $_SESSION["lname"] = "Kapupara";
    $_SESSION["city"] = "Rajkot";

    echo "Session Udpated";
?>