<?php
    // The variadic function argument becomes an array.

    function sum2($ip1, $ip2){
        return $ip1 + $ip2;
    }

    function sum3($ip1, $ip2, $ip3){
        return $ip1 + $ip2 + $ip3;
    }

    function sum4($ip1, $ip2, $ip3, $ip4){
        return $ip1 + $ip2 + $ip3 + $ip4;
    }

    function sum5($ip1, $ip2, $ip3, $ip4, $ip5){
        return $ip1 + $ip2 + $ip3 + $ip4 + $ip5;
    }

    echo "<hr> Sum is ".sum2(11, 22);
    echo "<hr> Sum is ".sum3(11, 22, 33);
    echo "<hr> Sum is ".sum4(11, 22, 33, 44);
    echo "<hr> Sum is ".sum5(11, 22, 33, 44, 55);
?>