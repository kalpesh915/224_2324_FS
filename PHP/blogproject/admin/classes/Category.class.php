<?php

    require_once("Connection.class.php");

    class Category extends Connection{
        public function addNewCategory($categoryname){
            $sqlQuery = "select * from category where categoryname = '$categoryname'";
            $result = $this->conn->query($sqlQuery);

            if($result->num_rows > 0 ){
                return false;
            }else{
                $classname = str_replace(" ", "", $categoryname);
                $sqlQuery = "insert into category (categoryname, categoryclass) values ('$categoryname', '$classname')";

                $this->conn->query($sqlQuery);
                return true;
            }
        }

        public function getAllCategory(){

        }
    }

    $category = new Category();
?>