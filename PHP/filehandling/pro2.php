<?php
    $fp = fopen("data.txt", "r");

    if(!$fp){
        die("Unable to process on file");
    }else{
        echo fread($fp, 200);
    }
    fclose($fp);
?>