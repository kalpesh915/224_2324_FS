<?php
    $student = ["fname" => "Bhavya"];

    echo "<hr> Original Array is ";
    print_r($student);

    //array_push($student, ["id" => 1, "lname" => "Dava", "city" => "Morbi"]);
    $student += ["id" => 1, "lname" => "Dava", "city" => "Morbi"];
    echo "<hr> Updated Array is ";
    print_r($student);

?>