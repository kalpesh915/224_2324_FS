<?php
    /*
        ?? 	Null coalescing
    */

    $ip1 = 111;
    

    $ans = ($ip1 > ($ip2 ?? 0) ? $ip1 : ($ip2 ?? 0));

    echo "Maximum is $ans";
?>