<?php
    $student = ["id" => 1, "fname" => "Keyur", "lname" => "Ramani", "city" => "Rajkot"];

    echo "<hr> Original Array is ";
    print_r($student);

    //array_pop($student);
    array_shift($student);
    
    echo "<hr> Updated Array is ";
    print_r($student);

?>