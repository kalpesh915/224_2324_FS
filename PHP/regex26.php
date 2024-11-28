<?php
    $str1 = "Apples and bananas.";
    $pattern = "/ba(na){2}/";
    $result = preg_replace($pattern, "-", $str1);
    echo $result;
?>
