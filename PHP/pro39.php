<?php
         ///0123456789012345678901234567890
    $ip1 = "welcome to world of php strings";

    echo "<hr> $ip1";
    echo "<hr> ".strtoupper($ip1);
    echo "<hr> ".strtolower($ip1);
    echo "<hr> ".str_replace("to", "TO", $ip1);
    echo "<hr> ".str_replace("o", "O", $ip1);
    echo "<hr> ".str_replace("s", "S", $ip1, $count);
    echo " Replace Count is $count";
    echo "<hr> ".strrev($ip1);
?>