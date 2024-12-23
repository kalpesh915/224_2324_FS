<?php
    interface Animal{
        public function speak();
        public function eat();
        // public function walk();
    }

    class Cat implements Animal{
        public function speak(){
            echo "Meow";
        }

        public function eat(){
            echo "All Type of Foods";
        }
    }

    class Dog implements Animal{
        public function speak(){
            echo "Woof";
        }

        public function eat(){
            echo "Some Type of Foods";
        }
    }

    class Cow implements Animal{
        public function speak(){
            echo "Moooow";
        }

        public function eat(){
            echo "Veg Foods";
        }
    }

    $animal = new Cat();
    $animal->speak().$animal->eat();
    echo "<hr>";

    $animal = new Dog();
    $animal->speak().$animal->eat();
    echo "<hr>";

    $animal = new Cow();
    $animal->speak().$animal->eat();
    echo "<hr>";
?>