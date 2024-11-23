<?php
    /*
        Compare the keys and values of two arrays (use a user-defined function to compare the keys), and return the differences:
    */
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("a"=>"red","f"=>"green","c"=>"blue","d"=>"yellow");

    function compare($a, $b){
        if($a == $b){
            return 0;
        }else{
            return $a > $b ? 1 : -1;
        }
    }

    $result=array_diff_uassoc($a1,$a2, "compare");
    print_r($result);

?>