<?php
    /*
        Find Maximum out of 3 numbers / nested if
    */

    $ip1 = 80;
    $ip2 = 34;
    $ip3 = 120;

    if($ip1 > $ip2){
        if($ip1 > $ip3){
            $ans = $ip1;
        }else{
            $ans = $ip3;
        }
    }else{
        if($ip2 > $ip3){
            $ans = $ip2;
        }else{
            $ans = $ip3;
        }
    }

    echo "Maximum is $ans";
?>