<?php
    function countLength($value){
        return strlen($value);
    }

    $students = ["het", "bhavin", "bhavya", "yash", "prince", "keyur", "nisarg"];
    $length = array_map("countLength", $students);

    print_r($length);

?>