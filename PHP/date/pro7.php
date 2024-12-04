<?php
    date_default_timezone_set("Asia/Kolkata");

    //$newdate = strtotime("12 march 2020");
    //$newdate = strtotime("march 12 2020");
    $newdate = strtotime("10:30pm April 15 2014");
    echo "<hr>Date is ".date("d/m/Y h:i:s l a", $newdate);
?>
