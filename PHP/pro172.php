<?php
/*
        Check if the key "Volvo" exists in an array:
    */
    $a = array("Volvo" => "XC90", "BMW" => "X5");
    if (array_key_exists("Volvo", $a)) {
        echo "Key exists!";
    } else {
        echo "Key does not exist!";
    }
