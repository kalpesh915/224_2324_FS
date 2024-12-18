<?php
    function countLength($value){
        return strlen($value);
    }

    $students = ["het", "bhavin", "bhavya", "yash", "prince", "keyur", "nisarg"];
    $length = [];

    for($i=0; $i<count($students); $i++){
        array_push($length, countLength($students[$i]));
    }

    print_r($length);

?>