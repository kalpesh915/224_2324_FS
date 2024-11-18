<?php
    $day = 5;

    switch($day){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:{
            echo "<hr> Working Day";
            break;
        }

        case 6:
        case 7:{
            echo "<hr> Weekend";
            break;
        }

        
        default:{
            echo "<hr>Day Number is out of Range";
        }
    }
?>