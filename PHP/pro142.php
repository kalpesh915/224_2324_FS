<?php
    $student = ["roll" => 1, "fname" => "Bhavin", "lname" => "thakar", "city" => "Rajkot"];


    $student["lname"] = "Thakar";
    foreach($student as $key => $value){
        echo "<hr> $key is $value";
    }

?>