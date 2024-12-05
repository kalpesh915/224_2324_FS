<?php
    session_start();

    require_once("menu.php");

    echo "<hr>Session ID is ".session_id();
    session_regenerate_id();
    echo "<hr>New Session ID is ".session_id();
?>