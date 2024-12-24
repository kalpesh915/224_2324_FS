<?php
    namespace Furniture;
    class Table{
        public function __construct(){
            echo "<hr>Table Class of Furniture NameSpace";
        }
    }

    namespace HTMLCode;
    class Table{
        public function __construct(){
            echo "<hr>Table Class of HTMLCode NameSpace";
        }
    }

    //$obj = new Table();
    use Furniture as FR;
    $obj = new FR\Table();
?>