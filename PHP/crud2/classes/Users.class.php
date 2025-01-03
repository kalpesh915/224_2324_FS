<?php
    require_once("Connection.class.php");

    class Users extends Connection{
        // function for validate username and password
        public function validateUser($email, $password){
            // check for email address is valid or not
            $sqlQuery = "select password from users where email = '$email'";
            $result = $this->conn->query($sqlQuery);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){ 
                    if(password_verify($password, $row["password"])){
                        return true;
                    }else{
                        return false;
                    }
                }
            }else{
                return false;
            }
        }

        public function getProfile($email){
            $sqlQuery = "select * from users where email = '$email'";
            return $this->conn->query($sqlQuery);
        }

        public function getAllOtherUsers($email){
            $sqlQuery = "select * from users where not email = '$email'";
            return $this->conn->query($sqlQuery);
        }

        public function updatePassword($email, $password){
            $sqlQuery = "udpate users setpassword = '$password' where email = '$email'";
            $this->conn->query($sqlQuery);
        }
    }

    $users = new Users();
?>