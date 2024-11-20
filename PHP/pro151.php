<?php
    $student = ["id" => 1, "fname" => "Keyur", "lname" => "Ramani"];

    echo "<hr> Original Array is ";
    print_r($student);

    unset($student["id"]);
    
    echo "<hr> Updated Array is ";
    print_r($student);

?>