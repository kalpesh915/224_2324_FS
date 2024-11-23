<?php
    //$students = array("Het", "Bhavin", "Bhavya", "Prince");
    //print_r($students);

    $students = array("Het" => 14, "Bhavin" => 13, "Bhavya" => 19, "Prince" => 18);
    $students = array_change_key_case($students, CASE_UPPER);
    print_r($students);
?>
