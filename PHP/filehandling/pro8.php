<?php
    $fp = fopen("data2.txt", "a");

    if(!$fp){
        die("Unable to process on file");
    }else{
        /*
            PHP Append Text
            You can append data to a file by using the "a" mode. The "a" mode appends text to the end of the file, while the "w" mode overrides (and erases) the old content of the file.
        */
        fwrite($fp, "Welcome to world of files in PHP\n");
    }
    fclose($fp);
?>