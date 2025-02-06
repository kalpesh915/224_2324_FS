<?php
    // User Related Functions

    require_once("Connection.class.php");

    class AdminUsers extends Connection{
        // Login Admin User
        public function adminLogin($email, $password){
            $sqlQuery = "select * from adminusers where email = '$email'";
            $result = $this->conn->query($sqlQuery);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if(password_verify($password, $row["password"])){
                        return 1;
                    }else{
                        return 0;
                    }
                }
            }else{
                return 0;
            }
        }

        // let all logs
        public function getAllLogs(){
            $sqlQuery = "select * from logs order by id desc";
            return $this->conn->query($sqlQuery);
        }

        public function updatePassword($email, $newpassword){
            $sqlQuery = "update adminusers set password = '$newpassword' where email = '$email'";
            $this->conn->query($sqlQuery);
        }

        public function getProfile($email){
            $sqlQuery = "select fname, lname from adminusers where email = '$email'";
            return $this->conn->query($sqlQuery);
        }

        public function updateProfile($email, $fname, $lname){
            $sqlQuery = "update adminusers set fname = '$fname', lname = '$lname' where email = '$email'";
            $this->conn->query($sqlQuery);
        }

        public function deleteAllLogs(){
            $sqlQuery = "delete from logs";
            $this->conn->query($sqlQuery);
        }

        public function getUnreadLogsCount(){
            $sqlQuery = "select count(id) from logs where status = 0";
            $result = $this->conn->query($sqlQuery);
            while($row = $result->fetch_assoc()){
                return $row["count(id)"];
            }
        }

        public function getSomeLogs($limit){
            $sqlQuery = "select * from logs order by id desc limit $limit";
            return $this->conn->query($sqlQuery);
        }

        public function markAllLogstoRead(){
            $sqlQuery = "update logs set status = 1 where status = 0";
            $this->conn->query($sqlQuery);
        }

        public function getUnreadMessageCount(){
            $sqlQuery = "select count(id) from messages where status = 0";
            $result = $this->conn->query($sqlQuery);
            while($row = $result->fetch_assoc()){
                return $row["count(id)"];
            }
        }

        public function getSomeMessages($limit){
            $sqlQuery = "select * from messages order by id desc limit $limit";
            return $this->conn->query($sqlQuery);
        }
        
        public function getAllUnreadMessage(){
            $sqlQuery = "select * from messages where status = 0 order by id desc";
            return $this->conn->query($sqlQuery);
        }
    }

    $adminusers = new AdminUsers();
?>