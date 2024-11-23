<?php
/*
           Create an array by using the elements from one "keys" array and one "values" array:
    */

$fname = array("Peter", "Ben", "Joe", "Peter");
$age = array("35", "37", "43", "31");

//$c = array_combine($fname, $age);
$c = array_combine($age, $fname);
print_r($c);
echo "<hr>";
print_r(array_count_values($c));
?>