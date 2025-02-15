<?php
    require_once("Connection.class.php");

    class Users extends Connection{
        public function getAllUsers() {
            $sqlQuery = "select * from users";
            return $this->conn->query($sqlQuery);
        }
    }

    $users = new Users();
?>