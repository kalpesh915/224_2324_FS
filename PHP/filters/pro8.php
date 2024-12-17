<?php
    $ip1 = "192.168.11.290"; /// 0 to 255

    if(filter_var($ip1, FILTER_VALIDATE_IP) === $ip1){
        echo "True";
    }else{
        echo "False";
    }
?>