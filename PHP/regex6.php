<?php
    $str1 = "Welcome to world of php with visual studio code";
    //$pattern = "/to/";
    $pattern = "/[to]/";
    $result = preg_replace($pattern, "-", $str1);
    echo $result;
?>
