<?php
    class ParentClass{
        public $fname, $lname;
        public function __construct($fname, $lname){
            echo "<hr> Parent Class Constructor";
            $this->fname = $fname;
            $this->lname = $lname;
        }
    }

    class ChildClass extends ParentClass{
        public $city;
        public function __construct($fname, $lname, $city){
            $this->city = $city;
            echo "<hr> Child Class Constructor";
        }

        public function intro(){
            echo "<hr> Welcome {$this->fname} {$this->lname} to {$this->city}";
        }
    }

    $obj = new ChildClass("Yash", "Chavda", "Rajkot");
    $obj->intro();
?>