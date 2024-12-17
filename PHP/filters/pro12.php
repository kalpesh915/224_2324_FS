<?php
    
    $ip1 = "2001:0db8:85a3:08d3:1319:8a2e:0370:733a"; // hex decimal 0-F

    if(filter_var($ip1, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === $ip1){
        echo "True";
    }else{
        echo "False";
    }
?>