<?php

    /*
        
    */

    $students = [3=>"Het", 7=>"Bhavya", 90=>"Nisarg", 587=>"Prince", 987=>"Dhuna"];

    /*for($i=0; $i<count($students); $i++){
        echo "<hr> Welcome $students[$i]";
    }*/

    foreach($students as $key => $value){
        echo "<hr>Welcome $value your id is $key";
    }
?>