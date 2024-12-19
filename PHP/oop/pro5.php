<?php
    // Note: In a class, variables are called properties and functions are called methods!
    class Fruit{
        public $name, $color;

        public function setName($name){
            // The $this keyword refers to the current object
            $this->name = $name;
        }

        public function setColor($color){
            // The $this keyword refers to the current object
            $this->color = $color;
        }

        public function getName(){
            return $this->name;
        }

        public function getColor(){
            return $this->color;
        }
    }

    $obj1 = new Fruit();
    $obj1->setName("Banana");
    $obj1->setColor("Yellow");
    echo $obj1->getName()." ".$obj1->getColor();

    echo "<hr>";
    $obj2 = new Fruit();
    $obj2->setName("Lichi");
    $obj2->setColor("Red");
    echo $obj2->getName()." ".$obj2->getColor();

    echo "<hr>";
    echo $obj1->getName()." ".$obj1->getColor();
?>