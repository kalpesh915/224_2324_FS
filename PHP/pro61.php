<?php

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (object) $a;
    $b = (object) $b;
    $c = (object) $c;
    $d = (object) $d;
    $e = (object) $e;

    
    //To verify the type of any object in PHP, use the var_dump() function:
    echo "<hr>"; var_dump($a);
    echo "<hr>"; var_dump($b);
    echo "<hr>"; var_dump($c);
    echo "<hr>"; var_dump($d);
    echo "<hr>"; var_dump($e);
?>