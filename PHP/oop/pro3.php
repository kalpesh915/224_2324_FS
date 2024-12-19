<?php
    // Note: In a class, variables are called properties and functions are called methods!
    class Fruit{
        public $name;

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }
    }

    $obj1 = new Fruit();
    $obj1->setName("Mango");
    echo $obj1->getName();
?>