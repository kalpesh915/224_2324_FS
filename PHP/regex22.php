<?php
    $str1 = "Welcome to world of php with visual studio code 1 11 123 1234 12345 112233 Q@#$%";
    $pattern = "/12?/";
    $result = preg_replace($pattern, "-", $str1);
    echo $result;
?>
