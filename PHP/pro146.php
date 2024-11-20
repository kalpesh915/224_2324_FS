<?php
    $student = ["roll" => 1, "fname" => "het"];

    echo "<hr> Original Array is ";
    print_r($student);

    // $student[] = "Manani";
    //$student[] = ["lname" => "Manani"];
    $student["lname"] = "Manani";

    echo "<hr> Updated Array is ";
    print_r($student);

?>