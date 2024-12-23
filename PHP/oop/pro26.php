<?php
    class ConstDemo{
        const GREETINGS = "Welcome to world of PHP Constant";

        public function __construct(){
            echo self::GREETINGS;
        }
    }

    $obj = new ConstDemo();
?>