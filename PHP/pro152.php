<?php
    $student = ["id" => 1, "fname" => "Keyur", "lname" => "Ramani", "city" => "Rajkot"];

    echo "<hr> Original Array is ";
    print_r($student);

    $student = array_diff($student, ["Keyur"]);
    
    echo "<hr> Updated Array is ";
    print_r($student);

?>