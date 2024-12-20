<?php
    class ParentClass{
        protected function greetings(){
            echo "<hr> Good Morning";
        }           
    }

    class ChildClass extends ParentClass{
        public function caller(){
            $this->greetings();
        }
    }

    $obj = new ChildClass();
    $obj->caller();
?>