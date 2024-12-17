<?php
    
    $ip1 = 101;

    if(filter_var($ip1, FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 100))) === $ip1){
        echo "True";
    }else{
        echo "False";
    }
?>