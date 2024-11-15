<?php
    /*
        Logical XOR
        Condition1      Condition2      Result
        True            False           True
        False           True            True
        False           False           False
        True            True            False
    */
    echo "<hr> Logical Xor : "; var_dump(11 > 5 xor 11 > 20);
    echo "<hr> Logical Xor : "; var_dump(11 > 15 xor 11 > 2);
    echo "<hr> Logical Xor : "; var_dump(11 > 15 xor 11 > 20);
    echo "<hr> Logical Xor : "; var_dump(11 > 5 xor 11 > 2);
?>