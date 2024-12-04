<?php
    date_default_timezone_set("Asia/Kolkata");
    $enddate = strtotime("31 december 2024");

    $days = time() - $enddate;

    echo $days / 60 / 60 / 24;
?>
