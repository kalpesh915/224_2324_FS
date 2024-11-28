<?php
    $str1 = "Welcome to world of php with visual studio code";
    //$patter = "/w/i";
    $patter = "/w/";
    $result = preg_match_all($patter, $str1);
    var_dump($result);
?>
