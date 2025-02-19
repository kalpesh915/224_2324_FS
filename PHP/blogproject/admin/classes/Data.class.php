<?php
    require_once("Connection.class.php");

    class Data extends Connection{
        public function countBlogs(){
            $sqlQuery = "select count(id) as count from blogs";
            $result = $this->conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                return $row["count"];
            }
        }

        public function countCategory(){
            $sqlQuery = "select count(id) as count from category";
            $result = $this->conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                return $row["count"];
            }
        }

        public function countUsers(){
            $sqlQuery = "select count(id) as count from users";
            $result = $this->conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                return $row["count"];
            }
        }

        public function newMessagesCount(){
            $sqlQuery = "select count(id) as count from messages where status = 0";
            $result = $this->conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                return $row["count"];
            }
        }

        public function countServices(){
            $sqlQuery = "select count(id) as count from services";
            $result = $this->conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                return $row["count"];
            }
        }

        public function countTeams(){
            $sqlQuery = "select count(id) as count from team";
            $result = $this->conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                return $row["count"];
            }
        }

        public function countSlider(){
            $sqlQuery = "select count(id) as count from slider";
            $result = $this->conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                return $row["count"];
            }
        }

        public function countFAQ(){
            $sqlQuery = "select count(id) as count from faq";
            $result = $this->conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                return $row["count"];
            }
        }

        public function countLogs(){
            $sqlQuery = "select count(id) as count from logs where status = 0";
            $result = $this->conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                return $row["count"];
            }
        }

    }

    $data = new Data();
?>