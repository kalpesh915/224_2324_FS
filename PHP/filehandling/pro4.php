<?php
    $fp = fopen("data.txt", "r");

    if(!$fp){
        die("Unable to process on file");
    }else{
        echo "<hr>".fgets($fp);
        echo "<hr>".fgets($fp);
        echo "<hr>".fgets($fp);
        echo "<hr>".fgets($fp);
        echo "<hr>".fgets($fp);
    }
    fclose($fp);
?>