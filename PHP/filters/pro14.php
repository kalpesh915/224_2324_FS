<?php
    
    $ip1 = "<h1>Hello WorldÆØÅ!</h1>";

    $ip1 = filter_var($ip1, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $ip1;
?>