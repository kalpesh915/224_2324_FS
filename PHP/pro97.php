<?php
    $i = 1;

    while($i <= 10){
        if($i == 5){
            $i++;
            continue;
        }
        echo " $i";
        
        $i++;
    }
?>