<?php
    class Student{
        public $roll, $fname, $lname, $college;

        public function __construct($roll, $fname, $lname, $college){
            $this->roll = $roll;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->college = $college;
        }

        public function printer(){
            echo "<hr> Welcome {$this->fname} {$this->lname} to {$this->college} Your Roll no. is {$this->roll}";
        }
    }

    $student1 = new Student(1, "Bhavya", "Dava", "Arpit Institute of Computer Science");
    $student2 = new Student(2, "Het", "Manani", "Arpit Institute of Computer Science");
    $student3 = new Student(3, "Yash", "Chavda", "Arpit Institute of Computer Science");

    $student1->printer();
    $student2->printer();
    $student3->printer();
?>