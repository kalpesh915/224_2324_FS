<?php
    $student = ["id" => 1, "fname" => "bhavya", "lname" => "dava", "city" => "morbi", "gender" => "male", "study" => "cs"];

    echo "<hr> Original Array is ";
    print_r($student);

    //asort($student); // value
    //ksort($student); // key
    
    echo "<hr> Updated Array is ";
    print_r($student);

?>