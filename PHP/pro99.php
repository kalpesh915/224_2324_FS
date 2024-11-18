<?php
    $i = 128;
    $ans = 0;

    while($i > 0):
        $ans++;
        $i = (int) ($i / 10);
    endwhile;

    echo $ans;
?>