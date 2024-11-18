<?php
    // Pass / Call by value

    $ip1 = 10;

    echo "<hr> Before Function Call \$ip1 is $ip1";

    function addTen($ip1){
        $ip1 += 10;
        echo "<hr> In Function Call \$ip1 is $ip1";
    }

    addTen($ip1);

    echo "<hr> After Function Call \$ip1 is $ip1";
?>