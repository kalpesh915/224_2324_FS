<?php

    /*
        
    */

    $students = [3=>"Het", 7=>"Bhavya", 90=>"Nisarg", 587=>"Prince", 987=>"Dhuna"];

    foreach($students as &$value){
        if($value == "Nisarg"){
            $value = "NISARG";
        }
    }

    print_r($students);
?>