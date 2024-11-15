<?php
    /*
        Find Maximum out of 3 numbers / ladder if
    */

    $ip1 = 20;
    $ip2 = 34;
    $ip3 = 12;

    if($ip1 > $ip2 and $ip1 > $ip3){
        $ans = $ip1;
    }else if($ip2 > $ip1 and $ip2 > $ip3){
        $ans = $ip2;
    }else{
        $ans = $ip3;
    }

    echo "Maximum is $ans";
?>