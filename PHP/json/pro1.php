<?php
    /* 
        PHP - json_encode()
        The json_encode() function is used to encode a value to JSON format.
    */

    $student = [
        "id" => 1,
        "fname" => "Bhavya",
        "lname" => "Dava",
        "city" => "Rajkot",
        "phone" => "9988998899",
        "email" => "bhavya@gmail.com",
        "gender" => "Male"
    ];

    $jsondata = json_encode($student);

    echo $jsondata;
?>