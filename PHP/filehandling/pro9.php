<?php
    $fp = fopen("data3.txt", "x");

    if(!$fp){
        die("Unable to process on file");
    }else{
        /*
            No create mode
            if old file exist php code give error about overwrite
        */
        fwrite($fp, "Welcome to world of files in PHP\n");
    }
    fclose($fp);
?>