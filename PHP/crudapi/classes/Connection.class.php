<?php
    class Connection {
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "224mysql";

        public $conn;

        public function __construct(){
            $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);

            if($this->conn->connect_error){
                die("Connection Failed ".$this->conn->connect_error);
            }
        }

        public function filterData($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            return $data;
        }
    }
?>