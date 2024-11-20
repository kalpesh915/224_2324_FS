<?php
    $student = ["Het", "Bhavya", "Bhavin", "Prince", "Keyur"];

    echo "<hr> Original Array is ";
    print_r($student);

    unset($student[4]);
    unset($student[2]);

    //array_splice($student, 1, 2);
    
    echo "<hr> Updated Array is ";
    print_r($student);

?>