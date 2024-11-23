<?php
    $a=array("red","green","blue","yellow","brown");
    $random_keys = array_rand($a,2);
    echo $a[$random_keys[0]]."<br>";
    echo $a[$random_keys[1]]."<br>";
    
?>