<?php
    require_once("Connection.class.php");

    class Users extends Connection{
        // add new user
        public function addNewUser($fname, $lname, $city, $gender, $email, $phone){
            $sqlQuery = "insert into users (fname, lname, city, gender, email, phone) values ('$fname', '$lname', '$city', '$gender', '$email', '$phone')";

            $this->conn->query($sqlQuery);

            return $this->conn->insert_id;
        }
    }

    $users = new Users();
?>