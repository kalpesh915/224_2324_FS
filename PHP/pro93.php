<?php
    $color = "green";

    switch($color){
        case "red":{
            echo "<hr> Favorite Color is Red";
        }

        case "green":{
            echo "<hr> Favorite Color is Green";
        }

        case "blue":{
            echo "<hr> Favorite Color is Blue";
        }

        default:{
            echo "<hr> Color is our of Red, Green and Blue";
        }
    }
?>