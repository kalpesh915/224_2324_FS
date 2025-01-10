<?php
    require_once("Connection.class.php");

    class Users extends Connection{
        // add new user
        public function addNewUser($fname, $lname, $city, $gender, $email, $phone){
            $sqlQuery = "insert into users (fname, lname, city, gender, email, phone) values ('$fname', '$lname', '$city', '$gender', '$email', '$phone')";

            $this->conn->query($sqlQuery);

            return $this->conn->insert_id;
        }

        public function getAllUsers(){
            $sqlQuery = "select * from users";
            return $this->conn->query($sqlQuery);
        }

        public function deleteUser($id){
            $sqlQuery = "delete from users where id = $id";
            $this->conn->query($sqlQuery);
            return $this->conn->affected_rows;
        }

        public function getOneUser($id){
            $sqlQuery = "select * from users where id = $id";
            return $this->conn->query($sqlQuery);
        }
    }

    $users = new Users();
?>