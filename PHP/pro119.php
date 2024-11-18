<?php
    // The variadic function argument becomes an array.

    function sum(...$ip){
        $ans = 0;
        foreach($ip as $x){
            $ans += $x;
        }

        return $ans;
    }

    echo "<hr> Sum is ".sum(11, 22);
    echo "<hr> Sum is ".sum(11, 22, 33);
    echo "<hr> Sum is ".sum(11, 22, 33, 44);
    echo "<hr> Sum is ".sum(11, 22, 33, 44, 55);
    echo "<hr> Sum is ".sum(11, 22, 33, 44, 55, 66);
    echo "<hr> Sum is ".sum(11, 22, 33, 44, 55, 66, 77);
    echo "<hr> Sum is ".sum(11, 22, 33, 44, 55, 66, 77, 88);
    echo "<hr> Sum is ".sum(11, 22, 33, 44, 55, 66, 77, 88, 99);
    echo "<hr> Sum is ".sum(11, 22, 33, 44, 55, 66, 77, 88, 99, 111);
?>