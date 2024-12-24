<?php
    class MyIterator implements Iterator{

        private $data = [];
        private $index = 0;

        public function __construct($items){
            $this->data = array_values($items);
        }

        public function current(): mixed{
            return $this->data[$this->index];
        }

        public function key(): mixed{
            return $this->index;
        }

        public function valid(): bool{
            return $this->index < count($this->data);
        }

        public function rewind(): void{
            $this->index = 0;
        }

        public function next(): void{
            $this->index++;
            //$this->index += 2;
        }
    }


    function printer(iterable $students){
        foreach($students as $tmp){
            echo "<hr> Welcome $tmp";
        }
    }

    $obj = new MyIterator(["Het", "Bhavin", "Bhavya", "Yash", "yash", "Keyur", "Prince"]);
    printer($obj);
?>