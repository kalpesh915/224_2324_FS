<?php
    // Outside the class (by directly changing the property value):
    class Fruit{
        public $name, $color;
    }

    $obj1 = new Fruit();
    $obj1->name = "Apple";
    $obj1->color = "Red";

    $obj2 = new Fruit();
    $obj2->name = "Banana";
    $obj2->color = "Yellow";

    echo "<hr> Name is {$obj1->name} and Color is {$obj1->color}";
    echo "<hr> Name is {$obj2->name} and Color is {$obj2->color}";
?>