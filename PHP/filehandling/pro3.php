<?php
    $fp = fopen("data.txt", "r");

    if(!$fp){
        die("Unable to process on file");
    }else{
        echo fread($fp, filesize("data.txt"));
    }
    fclose($fp);
?>