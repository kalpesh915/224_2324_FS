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
    }

    $adminusers = new AdminUsers();
?>