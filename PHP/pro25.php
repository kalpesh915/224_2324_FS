<?php
    function greetings(){
        static $x = 1;
        echo " $x";
        $x++;
    }

    for($i=1; $i<=10; $i++){
        greetings();
    }
?>