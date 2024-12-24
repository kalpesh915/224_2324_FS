<?php
    class Student{
        public $roll, $fname, $lname;
        public static $college = "Arpit Institute of Computer Science";

        public function __construct($roll, $fname, $lname){
            $this->roll = $roll;
            $this->fname = $fname;
            $this->lname = $lname;
        }

        public function printer(){
            echo "<hr> Welcome {$this->fname} {$this->lname} to ".self::$college." Your Roll no. is {$this->roll}";
        }
    }

    $student1 = new Student(1, "Bhavya", "Dava");
    $student2 = new Student(2, "Het", "Manani");
    $student3 = new Student(3, "Yash", "Chavda");

    Student::$college = "RK University";

    $student1->printer();
    $student2->printer();
    $student3->printer();

    echo "<hr> College Name is ".Student::$college;
?>