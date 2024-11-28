<?php
    $str1 = "welcome to world of php with visual studio code";
    $patter = "/from/i";
    $result = preg_match($patter, $str1);
    var_dump($result);
?>