<?php
    
    function division($ip1, $ip2){
        if($ip2 == 0){
            throw new Exception("Message is Division not Possible with Zero", 101);
        }else{
            return $ip1 / $ip2;
        }        
    }

    echo "<hr> Before Division";
    try{
        $ans = division(100, 0);
        echo "<hr> Answer is : ".$ans;
    }catch(Exception $err){
        echo "<hr> Error is : {$err->getMessage()} in {$err->getFile()} on Line {$err->getLine()} error Code is {$err->getCode()}";
    }
    
    echo "<hr> After Division";
?>