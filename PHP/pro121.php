<?php
    // The variadic function argument becomes an array.
    declare(strict_types=1);
    function sum(int $ip1, int $ip2){
        $ans = $ip1 + $ip2;
        return $ans;
    }

    echo "<hr> Sum is ".sum(11, 22);
    echo "<hr> Sum is ".sum(11, "22");
    echo "<hr> Sum is ".sum(11, "22 days");
    echo "<hr> Sum is ".sum(11, 221);
?>