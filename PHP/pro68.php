<?php
    namespace myClass;
    class Demo{
        public function __construct()
        {
            echo "<hr>".__CLASS__;
            echo "<hr>".__METHOD__;
            echo "<hr>".__FUNCTION__;
            echo "<hr>".__NAMESPACE__;
        }
    }

    $obj = new Demo();
?>