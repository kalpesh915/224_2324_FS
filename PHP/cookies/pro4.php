<?php
    require_once("menu.php");

    if(isset($_COOKIE["username"])){
        echo "Welcome ".$_COOKIE["username"];
    }else{
        echo "Welcome Guest";
    }

?>