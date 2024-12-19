<?php
    class Fruit{
        public $name;

        public function setName(){
            $this->name = "Banana";
        }

        public function getName(){
            return $this->name;
        }
    }

    $obj1 = new Fruit();
    $obj1->setName();
    echo $obj1->getName();
?>