<?php
    $str1 = "<h1>Welcome to world of filters in PHP</h1>";

    $str1 = filter_var($str1, FILTER_SANITIZE_STRING);
    echo $str1;
?>