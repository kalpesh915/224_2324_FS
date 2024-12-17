<?php
    $ip1 = "keyur@raiyanifamily.com";
    $ip1 = filter_var($ip1, FILTER_SANITIZE_EMAIL);

    if(filter_var($ip1, FILTER_VALIDATE_EMAIL) === $ip1){
        echo "True";
    }else{
        echo "False";
    }
?>