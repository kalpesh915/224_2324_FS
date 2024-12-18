<?php
    $students = ["het", "bhavin", "bhavya", "yash", "prince", "keyur", "nisarg"];
    //$length = array_map(function($value) { return strlen($value); },$students);
    $length = array_map(function($value) { return strtoupper($value); },$students);

    print_r($length);

?>