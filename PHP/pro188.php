<?php
    $ip1 = 10;
    $ip2 = 20;

    function makeSum(){
        global $ip1, $ip2; // import global variables
        echo "Sum is ".($ip1 + $ip2);
    }

    makeSum();
?>