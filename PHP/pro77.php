<?php
    /*
        Logical OR
        Condition1      Condition2      Result
        True            False           True
        False           True            True
        False           False           False
        True            True            True
    */
    echo "<hr> Logical AND : "; var_dump(11 > 5 or 11 > 20);
    echo "<hr> Logical AND : "; var_dump(11 > 15 or 11 > 2);
    echo "<hr> Logical AND : "; var_dump(11 > 15 or 11 > 20);
    echo "<hr> Logical AND : "; var_dump(11 > 5 or 11 > 2);
    echo "<hr> Logical AND : "; var_dump(11 > 5 || 11 > 2);
?>