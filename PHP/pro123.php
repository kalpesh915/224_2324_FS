<?php
    
    /*
        int makeDiv(int ip1, int ip2){
            
        }
    */

    function makeDiv($ip1, $ip2) : int {
        return (int) ($ip1 / $ip2);
        //return $ip1 + $ip2;
    }

    echo "<hr> Result is ".makeDiv(10, 2);
    echo "<hr> Result is ".makeDiv(10, 3);
    echo "<hr> Result is ".makeDiv(11, 2);
    echo "<hr> Result is ".makeDiv(10, 4);
    echo "<hr> Result is ".makeDiv(10, 2);
?>