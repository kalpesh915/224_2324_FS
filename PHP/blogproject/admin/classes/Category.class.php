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
            $sqlQuery = "select * from category";
            return $this->conn->query($sqlQuery);
        }

        public function updateCategoryStatus($id, $status){
            $sqlQuery = "update category set status = $status where id = $id";
            $this->conn->query($sqlQuery);
        }

        public function getOneCategory($id){
            $sqlQuery = "select * from category where id = $id";
            return $this->conn->query($sqlQuery);
        }

        public function updateCategory($id, $categoryname){
            // check category name is exist or not
            $sqlQuery = "select * from category where categoryname = '$categoryname'";
            $result = $this->conn->query($sqlQuery);

            if($result->num_rows > 0){
                return false;
            }else{
                $classname = str_replace(" ", "", $categoryname);
                $sqlQuery = "update category set categoryname = '$categoryname', categoryclass = '$classname' where id = $id";

                $this->conn->query($sqlQuery);
                return true;
            }
        }
    }

    $category = new Category();
?>