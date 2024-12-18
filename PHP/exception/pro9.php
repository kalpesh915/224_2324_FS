<?php
    function generateError(){
        throw new Exception("First Error", 101);
    }

    function checkError(){
        try{
            generateError();
        }catch(Exception $err){
            throw new Exception("Second Error", 102, $err);
        }
    }

    try{
        checkError();
    }catch(Exception $err){
        echo "Error is ".$err;
        //echo "Error is ".$err->getPrevious();
    }
?>