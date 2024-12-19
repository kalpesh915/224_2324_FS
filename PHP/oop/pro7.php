<?php
    // You can use the instanceof keyword to check if an object belongs to a specific class:
    class Fruit{
        public $name, $color;
    }

    class Flowers{

    }

    $obj1 = new Fruit();
    var_dump($obj1 instanceof Fruit);
    echo "<hr>";
    var_dump($obj1 instanceof Flowers);
?>