<?php
    // global
    $username = "Thakar Bahvin";

    echo "<hr> Welcome $username";

    function msg(){
        // local
        $username = "Het Manani";
        echo "<hr> Welcome $username";
    }

    msg();

    echo "<hr> Welcome $username";
?>