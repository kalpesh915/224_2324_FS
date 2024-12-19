<?php
    class Fruit{
        public $name, $color, $price;

        public function setValues($name, $color, $price){
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }

        public function getValues(){
            echo "<hr> Fruit Name is {$this->name} Color is {$this->color} and Price is {$this->price}";
        }
    }

    $obj1 = new Fruit();
    $obj1->setValues("Pineapple", "Yellow", 120);
    $obj1->getValues();

    $obj2 = new Fruit();
    $obj2->setValues("Banana", "Yellow", 100);
    $obj2->getValues();
    
?>