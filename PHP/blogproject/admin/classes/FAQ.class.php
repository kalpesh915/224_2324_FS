<?php
    require_once("Connection.class.php");

    class FAQ extends Connection{
        public function addNewFAQ($question, $answer){
            $sqlQuery = "insert into faq (question, answer) values ('$question', '$answer')";
            $this->conn->query($sqlQuery);
        }

        public function getAllFAQ(){
            $sqlQuery = "select * from faq";
            return $this->conn->query($sqlQuery);
        }

        public function changeFAQStatus($id, $status){
            $sqlQuery = "update faq set status = $status where id = $id";
            $this->conn->query($sqlQuery);
        }

        public function deleteFAQ($id){
            $sqlQuery = "delete from faq where id = $id";
            $this->conn->query($sqlQuery);
        }
    }

    $faq = new FAQ();
?>