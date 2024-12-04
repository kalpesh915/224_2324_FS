<?php
    $fp = fopen("data.txt", "r");

    if(!$fp){
        die("Unable to process on file");
    }else{
        // PHP Check End-Of-File - feof()
        while(!feof($fp)){
            echo "<hr> ".fgets($fp);
        }
    }
    fclose($fp);
?>