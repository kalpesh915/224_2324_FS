<?php
    $str1 = "Welcome to world of php with visual studio code";
    $pattern = "/o/";
    $result = preg_replace($pattern, "O", $str1);
    echo $result;
?>
