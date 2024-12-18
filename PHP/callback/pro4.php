<?php
    function question($value){
        return $value." ?";
    }

    function comma($value){
        return $value." ,";
    }

    function exclaim($value){
        return $value." !";
    }

    function printer($value, $callback){
        echo $callback($value);
    }

    printer("Het", "question");
?>