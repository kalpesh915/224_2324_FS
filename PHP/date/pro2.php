<?php
    echo "<hr> Current Timezone is ".date_default_timezone_get();
    date_default_timezone_set("Asia/Kolkata");
    echo "<hr> Current Timezone is ".date_default_timezone_get();
?>