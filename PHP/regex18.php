<?php
    $str1 = "Welcome to world of php with visual studio code 1 11 123 1234 12345 112233 Q@#$%";
    //$pattern = "/\s/";
    //$pattern = "/\S/";
    //$pattern = "/\d/";
    //$pattern = "/\D/";
    //$pattern = "/\w/";
    $pattern = "/\W/";
    $result = preg_replace($pattern, "-", $str1);
    echo $result;
?>
