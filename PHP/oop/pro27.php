<?php
    abstract class Car{
        abstract protected function fuel();
        abstract public function seating();
        public function breaking(){
            echo "<hr> Breking is availble in Car";
        }
    }

    class Innova extends Car{
        public function fuel(){
            echo "<hr> Innova use diesel as fuel";
        }

        public function seating(){
            echo "<hr> Innova have 7 seat arrengemnt";
        }
    }

    class Swift extends Car{
        public function fuel(){
            echo "<hr> Swift use CNG as fuel";
        }

        public function seating(){
            echo "<hr> Swift have 5 seat arrengemnt";
        }
    }
?>