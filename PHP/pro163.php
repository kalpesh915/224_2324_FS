<?php
    /*
           Get column of last names from a recordset:
    */

    $students = [
        [
            "id" => 1,
            "fname" => "het",
            "lname" => "Manani"
        ],
        [
            "id" => 1,
            "fname" => "Bhavin",
            "lname" => "Thakar"
        ],
        [
            "id" => 3,
            "fname" => "Bhavya",
            "lname" => "Dava"
        ],
        [
            "id" => 4,
            "fname" => "Prince",
            "lname" => "Gajipara"
        ]
    ];

    print_r(array_column($students, "fname"));
?>
