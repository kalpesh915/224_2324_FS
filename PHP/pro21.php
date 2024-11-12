<?php
    // global
    $username = "Thakar Bahvin";

    echo "<hr> Welcome $username";

    function msg(){
        global $username;
        echo "<hr> Welcome $username";
    }

    msg();

    echo "<hr> Welcome $username";
?>