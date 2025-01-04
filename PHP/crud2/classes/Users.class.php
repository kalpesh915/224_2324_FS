<?php
    require_once("Connection.class.php");

    class Users extends Connection{
        // function for validate username and password
        public function validateUser($email, $password){
            // check for email address is valid or not
            $sqlQuery = "select password from users where email = '$email' and deleted = 0";
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
            $sqlQuery = "update users set password = '$password' where email = '$email'";
            $this->conn->query($sqlQuery);
        }

        public function updateProfile($fname, $lname, $city, $gender, $phone, $photopath = null, $email){
            if($photopath != null){
                // update photo
                $sqlQuery = "update users set photopath = '$photopath' where email = '$email'";
                $this->conn->query($sqlQuery);
            }

            $sqlQuery = "update users set fname = '$fname', lname = '$lname', city = '$city', gender = '$gender', phone = '$phone' where email = '$email'";

            $this->conn->query($sqlQuery);
        }

        public function getActivityLogs($email){
            $sqlQuery = "select * from logs where email = '$email' order by id desc";
            return $this->conn->query($sqlQuery);
        }

        public function softDelete($email){
            $sqlQuery = "update users set deleted = 1 where email = '$email'";
            $this->conn->query($sqlQuery);
        }
    }

    $users = new Users();
?>