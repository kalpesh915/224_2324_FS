<?php
    class Fruit{
        public $name, $color, $weight;

        public function __construct($name, $color, $weight){
            //echo "<hr> Constructor Function Called";
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;

            $this->printer();
        }

        public function printer(){
            echo "<hr> Fruit Name is {$this->name} color is {$this->color} and Weight is {$this->weight}";
        }

        public function __destruct(){
            echo "<hr>Destructor Called";
        }
    }

    $obj1 = new Fruit("Apple", "Red", "100GMS");
    $obj2 = new Fruit("Kiwi", "Green", "80GMS");
    $obj3 = new Fruit("Pineapple", "Yellow", "800GMS");

?>