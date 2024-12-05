<?php
    session_start();

    //print_r($_SESSION);
    echo "Welcome ".$_SESSION["firstname"]." ".$_SESSION["lastname"]. " To ".$_SESSION["city"];

?>