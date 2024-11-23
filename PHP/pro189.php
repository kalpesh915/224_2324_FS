<?php
    $ip1 = 10;
    $ip2 = 20;

    function makeSum(){
        echo "Sum is ".($GLOBALS["ip1"] + $GLOBALS["ip2"]);
    }

    makeSum();
?>