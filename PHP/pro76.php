<?php
    /*
        Condition1      Condition2      Result
        True            False           False
        False           True            False
        False           False           False
        True            True            True
    */
    echo "<hr> Logical AND : "; var_dump(11 > 5 and 11 > 20);
    echo "<hr> Logical AND : "; var_dump(11 > 15 and 11 > 2);
    echo "<hr> Logical AND : "; var_dump(11 > 15 and 11 > 20);
    echo "<hr> Logical AND : "; var_dump(11 > 5 and 11 > 2);
    echo "<hr> Logical AND : "; var_dump(11 > 5 && 11 > 2);
?>