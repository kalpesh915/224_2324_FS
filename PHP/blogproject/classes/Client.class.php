<?php
    require("admin/classes/Connection.class.php");

    class Client extends Connection{
        public function getAllFAQ(){
            $sqlQuery = "select * from faq where status = 1";
            return $this->conn->query($sqlQuery);
        }

        public function getContactInfo(){
            $sqlQuery = "select * from contact where id = 1";
            return $this->conn->query($sqlQuery);
        }

        public function getSocialMediaLinks() {
            $sqlQuery = "select * from socialmedia where id = 1";
            return $this->conn->query($sqlQuery);
        }

        public function getAllTeamMembers(){
            $sqlQuery = "select * from team where status = 1";
            return $this->conn->query($sqlQuery);
        }

        public function getAllServices(){
            $sqlQuery = "select * from services where status = 1";
            return $this->conn->query($sqlQuery);
        }

        public function storeNewMessage($senderemail, $subejct, $content){
            $sqlQuery = "insert into messages (senderemail, subject, content) values ('$senderemail', '$subejct', '$content')";
            $this->conn->query($sqlQuery);
        }
    }

    $client = new Client();
?>