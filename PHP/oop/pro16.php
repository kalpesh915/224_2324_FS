<?php
    // Single Level Inheritance
    class Math1{
        public function Sum($ip1, $ip2){
            echo "<hr> Sum is ".$ip1 + $ip2;
        }
        public function Sub($ip1, $ip2){
            echo "<hr> Sub is ".$ip1 - $ip2;
        }
    }

    class Math2 extends Math1{
        public function Mul($ip1, $ip2){
            echo "<hr> Mul is ".$ip1 * $ip2;
        }
        public function Div($ip1, $ip2){
            echo "<hr> Div is ".$ip1 / $ip2;
        }
    }

    $obj = new Math2();

    $obj->Sum(111, 22);
    $obj->Sub(111, 22);
    $obj->Mul(111, 22);
    $obj->Div(111, 22);
?>