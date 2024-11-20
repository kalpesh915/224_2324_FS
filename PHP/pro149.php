<?php
    $student = ["Het", "Bhavya", "Bhavin", "Prince", "Keyur"];

    echo "<hr> Original Array is ";
    print_r($student);

    array_splice($student, 0, 2);
    
    echo "<hr> Updated Array is ";
    print_r($student);

?>