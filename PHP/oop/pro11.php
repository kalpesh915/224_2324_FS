<?php
    class Fruit{
        public $name, $color, $weight;

        public function __construct($name, $color, $weight){
            echo "<hr> Constructor Function Called";
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        public function printer(){
            echo "<hr> Fruit Name is {$this->name} color is {$this->color} and Weight is {$this->weight}";
        }
    }

    $obj1 = new Fruit("Apple", "Red", "100GMS");
    $obj1->printer();

    $obj2 = new Fruit("Kiwi", "Green", "80GMS");
    $obj2->printer();
?>