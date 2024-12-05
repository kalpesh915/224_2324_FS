<?php
    session_start();

    require_once("menu.php");

    echo "Welcome {$_SESSION['fname']} {$_SESSION['lname']} to {$_SESSION['city']}";
?>