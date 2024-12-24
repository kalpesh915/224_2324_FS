<?php
    class StaticMethodDemo{
        public static function msg(){
            echo "Welcome";
        }

        // call static method from constructor
        public function __construct(){
            self::msg();
        }
    }

    $obj = new StaticMethodDemo();
    
?>