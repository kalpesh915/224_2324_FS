<?php
    abstract class Car{
        public $carName;

        public function __construct($carName){
            $this->carName = $carName;
        }

        abstract public function intro();
    }

    class Tata extends Car{
        public function intro(){
            echo "<hr> Tata Indian Brand {$this->carName}";
        }
    }

    class Mahindra extends Car{
        public function intro(){
            echo "<hr> Mahindra, Another Indian Brand  {$this->carName}";
        }
    }

    class Volvo extends Car{
        public function intro(){
            echo "<hr> Volvo, Trusted German Brand {$this->carName}";
        }
    }

    $obj = new Tata("Nexon");
    $obj->intro();


    $obj1 = new Tata("Scorpio N");
    $obj1->intro();

    $obj3 = new Tata("XC-60");
    $obj3->intro();
?>