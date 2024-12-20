<?php
    class Fruit{
        public $name, $color, $weight;

        public function __construct(){
            echo "<hr> Constructor Function Called";
            $this->name = "Apple";
            $this->color = "Red";
            $this->weight = "120GMS";
        }

        public function printer(){
            echo "<hr> Fruit Name is {$this->name} color is {$this->color} and Weight is {$this->weight}";
        }
    }

    $obj1 = new Fruit();
    $obj1->printer();

    $obj2 = new Fruit();
    $obj2->printer();
?>