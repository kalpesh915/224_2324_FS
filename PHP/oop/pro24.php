<?php
    class ParentClass{
        final public function caller(){
            echo "<hr> caller method from parent class";
        }
    }

    class ChildClass extends ParentClass{
        public function caller(){
            echo "<hr> caller method from child class";
        }
    }

    $obj = new ChildClass();
    $obj->caller();
?>