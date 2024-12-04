<?php
    date_default_timezone_set("Asia/Kolkata");
    $startdate = strtotime("sunday");
    $enddate = strtotime("31 march 2025", $startdate);

    while($startdate < $enddate){
        echo "<hr>".date("d/m/Y l", $startdate);
        $startdate = strtotime("+1 week", $startdate);
    }
?>
