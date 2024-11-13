<?php
         ///0123456789012345678901234567890
    $ip1 = "Welcome to world of php strings";

    echo "<hr>".substr($ip1, 10, 10);
    echo "<hr>".substr($ip1, 10);
    echo "<hr>".substr($ip1, -10, 10);
    echo "<hr>".substr($ip1, 10, -5);
?>