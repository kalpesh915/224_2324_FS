<?php
    echo "<hr> == Operator "; var_dump(11 == 11);
    echo "<hr> === Operator "; var_dump(11 == 111);

    echo "<hr> == Operator "; var_dump(11 == "11"); // values
    echo "<hr> === Operator "; var_dump(11 === "11"); // values + type

    echo "<hr> <> Operator "; var_dump(11 <> 11);
    echo "<hr> != Operator "; var_dump(11 != 11);

    echo "<hr> > Operator "; var_dump(11 > 10);
    echo "<hr> > Operator "; var_dump(11 > 110);
    echo "<hr> > Operator "; var_dump(11 > 11);
    echo "<hr> > Operator "; var_dump(11 >= 11);

    echo "<hr> < Operator "; var_dump(11 < 10);
    echo "<hr> < Operator "; var_dump(11 < 110);
    echo "<hr> < Operator "; var_dump(11 < 11);
    echo "<hr> < Operator "; var_dump(11 <= 11);
?>