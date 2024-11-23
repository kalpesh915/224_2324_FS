<?php
    /*
        Compare the values of two arrays, and return the differences:
    */
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("a"=>"Red","f"=>"green","c"=>"blue");

    $result=array_diff_assoc($a1,$a2);
    print_r($result);

?>