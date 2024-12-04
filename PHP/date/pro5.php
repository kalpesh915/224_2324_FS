<?php
    date_default_timezone_set("Asia/Kolkata");

    $newdate = mktime(10, 10, 10, 12, 30, 2022);
    //echo $newdate;
    echo "<hr>Date is ".date("d/m/Y h:i:s l a", $newdate);
?>
