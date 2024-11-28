<?php
    $str1 = "Welcome to world of php with visual studio code";
    //$patter = "/o/i";
    $patter = "/w/";
    $result = preg_match($patter, $str1);
    var_dump($result);
?>
