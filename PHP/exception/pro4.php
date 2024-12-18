<?php
    
    function division($ip1, $ip2){
        if($ip2 == 0){
            throw new Exception("Division not Possible with Zero");
        }else{
            return $ip1 / $ip2;
        }        
    }

    echo "<hr> Before Division";
    $ans = division(100, 0);
    echo "<hr> Answer is : ".$ans;
    echo "<hr> After Division";
?>