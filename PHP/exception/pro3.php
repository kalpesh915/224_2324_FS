<?php
    
    function division($ip1, $ip2){
        return $ip1 / $ip2;
    }

    echo "<hr> Before Division";
    $ans = division(100, 0);
    echo "<hr> Answer is : ".$ans;
    echo "<hr> After Division";
?>