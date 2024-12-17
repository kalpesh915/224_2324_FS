<?php
    $ip1 = "https://www.w3schools.com";
    $ip1 = filter_var($ip1, FILTER_SANITIZE_URL);

    if(filter_var($ip1, FILTER_VALIDATE_URL) === $ip1){
        echo "True";
    }else{
        echo "False";
    }
?>