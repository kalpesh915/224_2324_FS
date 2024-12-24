<?php
    class StaticMethodDemo{
        public static function msg(){
            echo "Welcome";
        }
    }

    class ChildClass extends StaticMethodDemo{
        public function caller(){
            //StaticMethodDemo::msg();
            parent::msg();
        }
    }

    $obj = new ChildClass();
    $obj->caller();
    
?>