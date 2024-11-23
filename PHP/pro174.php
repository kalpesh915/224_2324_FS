<?php
    /*
        PHP array_map() Function
    */

    function div2($ip){
        return $ip / 2;
    }

    function mul2($ip){
        return $ip * 2;
    }

    $ip1 = [11, 22, 33, 44, 55, 66, 77, 88, 99, 111];

    $result = array_map("mul2", $ip1);

    print_r($result);
?>