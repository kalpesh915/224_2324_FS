<?php
    $str1 = "<script>alert('welcome to world of filters')</script>";

    $str1 = filter_var($str1, FILTER_SANITIZE_STRING);
    echo $str1;
?>