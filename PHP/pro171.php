<?php
    /*
      
    */
    function findOdd($x){
        return ($x & 1);
    }

    $keys = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
    $result = array_filter($keys, "findOdd");
    print_r($result);
?>
