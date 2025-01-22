<?php
    class Connection{
        private $hostname = "localhost";
        private $username = "root";
        private $database = "blogingsystem";
        private $password = "";

        public $conn = null;

        // constructor for create connection
        public function __construct(){
            $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);

            if($this->conn->connect_error){
                throw new Exception("Connection Failed Due to ".$this->conn->connect_error);
            }
        }

        // Function for Filter Data
        public function filterData($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            return $data;
        }

        // log writer
        public function logWriter($email, $logMessage){
            $sqlQuery = "insert into logs (email, logmessage) values ('$email', '$logMessage')";
            $this->conn->query($sqlQuery);
        }
        
        // getDB Info
        public function getDatabaseInfo(){
            return [
                "hostname" => $this->hostname,
                "username" => $this->username,
                "password" => $this->password,
                "database" => $this->database
            ];
        }
    }
?>