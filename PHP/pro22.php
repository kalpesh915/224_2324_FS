<?php
    // global
    $username = "Thakar Bahvin";

    echo "<hr> Welcome $username";

    function msg(){
        echo "<hr> Welcome {$GLOBALS['username']}";
    }

    msg();

    echo "<hr> Welcome $username";
?>