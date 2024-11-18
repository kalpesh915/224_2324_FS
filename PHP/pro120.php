<?php
    // The variadic function argument becomes an array.

    function sum($ip1, $ip2){
        $ans = $ip1 + $ip2;
        return $ans;
    }

    echo "<hr> Sum is ".sum(11, 22);
    echo "<hr> Sum is ".sum(11, "22");
    echo "<hr> Sum is ".sum(11, "22 days");
    echo "<hr> Sum is ".sum(11, 221);
?>