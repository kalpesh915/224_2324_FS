<?php
    trait Calculator1{
        public function Sum($ip1, $ip2){
            echo "<hr> Sum is ". ($ip1 + $ip2);
        }
        public function Sub($ip1, $ip2){
            echo "<hr> Sub is ". ($ip1 - $ip2);
        }
    }

    trait Calculator2{
        public function Div($ip1, $ip2){
            echo "<hr> Div is ". ($ip1 / $ip2);
        }
        public function Mul($ip1, $ip2){
            echo "<hr> Mul is ". ($ip1 * $ip2);
        }
    }

    trait Calculator3{
        public function Mod($ip1, $ip2){
            echo "<hr> Mod is ". ($ip1 % $ip2);
        }
    }

    class Calculator{
        use Calculator1, Calculator2, Calculator3;
    }

    $obj = new Calculator();

    $obj->Sum(111, 22);
    $obj->Sub(111, 22);
    $obj->Mul(111, 22);
    $obj->Div(111, 22);
    $obj->Mod(111, 22);
?>
