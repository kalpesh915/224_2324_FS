<?php
    class Connection {
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "224mysql";

        public $conn = null;

        public function __construct(){
            $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);

            if($this->conn->connect_error){
                die("Error while connecting Database Server ".$this->conn->connect_error);
            }
        }

        public function filterData($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            return $data;
        }

        public function logWriter($email, $event){
            $sqlQuery = "insert into logs (email, event) values ('$email', '$event')";
            $this->conn->query($sqlQuery);
        }

        public function createMessage($type, $message){
            return "<div class='alert ". ($type == "success" ? "alert-success" : "alert-danger"). " alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>".($type == "success" ? "Success" : "Error")." : </strong> $message</div>";
        }
    }
?>