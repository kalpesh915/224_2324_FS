<?php
    $color = "black";

    switch($color){
        case "red":{
            echo "<hr> Favorite Color is Red";
            break;
        }

        case "green":{
            echo "<hr> Favorite Color is Green";
            break;
        }

        case "blue":{
            echo "<hr> Favorite Color is Blue";
            break;
        }

        default:{
            echo "<hr> Color is our of Red, Green and Blue";
            break;
        }
    }
?>