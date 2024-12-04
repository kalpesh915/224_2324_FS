<?php
    date_default_timezone_set("Asia/Kolkata");
    //$newdate = strtotime("today");
    //$newdate = strtotime("yesterday");
    //$newdate = strtotime("tomorrow");
    //$newdate = strtotime("+5 day");
    //$newdate = strtotime("+1 year");
    $newdate = strtotime("next sunday");
    echo "<hr>Date is ".date("d/m/Y h:i:s l a", $newdate);
?>
