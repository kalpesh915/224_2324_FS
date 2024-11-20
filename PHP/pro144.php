<?php
    $student = ["roll" => 1, "fname" => "Bhavin", "lname" => "thakar", "city" => "Rajkot"];

    echo "<hr> Original Array is ";
    print_r($student);

    echo "<hr> Values Between Loop";
    foreach($student as &$x){
        $x = strtoupper($x);
        echo " ".strtoupper($x);
    }

    echo "<hr> Updated Array is ";
    print_r($student);

?>