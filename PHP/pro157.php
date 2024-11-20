<?php
    $students = [
        "id" => 1,
        "fname" => "Bhavin",
        "lname" => "Thakar",
        "city" => "Rajkot",
        "marks" => [
            "sub1" => 113,
            "sub2" => 123,
            "sub3" => 133,
            "sub4" => 143,
            "sub5" => 153,
        ]
    ];

    // echo $students["marks"]["sub5"];
    print_r($students);
?>