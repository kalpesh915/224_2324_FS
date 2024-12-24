<?php
    function printer(iterable $studetns){
        foreach($studetns as $tmp){
            echo "<hr> Welcome $tmp";
        }
    }

    $names = ["Yash", "yash", "Nisarg", "Het", "Bhavin", "Prince", "Bhavya"];

    printer($names);
?>