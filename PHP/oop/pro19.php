<?php
    class ParentClass{
        public function __construct(){
            echo "<hr> Parent Class Constructor";
        }
    }

    class ChildClass extends ParentClass{
        public function __construct(){
            echo "<hr> Child Class Constructor";
        }
    }

    $obj = new ChildClass();
?>