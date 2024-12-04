<?php
    $fp = fopen("data1.txt", "w");

    if(!$fp){
        die("Unable to process on file");
    }else{
        /*
            PHP Overwriting
            Now that "newfile.txt" contains some data we can show what happens when we open an existing file for writing. All the existing data will be ERASED and we start with an empty file.
        */
        fwrite($fp, "Welcome to world of files in PHP");
    }
    fclose($fp);
?>