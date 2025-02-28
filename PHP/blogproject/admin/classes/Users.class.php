<?php
    require_once("Connection.class.php");

    class Users extends Connection{
        public function getAllUsers() {
            $sqlQuery = "select * from users";
            return $this->conn->query($sqlQuery);
        }

        public function updateUserStatus($id, $status){
            $sqlQuery = "update users set status = $status where id = $id";
            $this->conn->query($sqlQuery);
        }

        public function viewUserActivity($userid){
            $sqlQuery = "select comments.id, comments.commentdate, comments.userid, comments.commenttext, comments.adminstatus, blogs.blogtitle from comments inner join blogs on comments.blogid = blogs.id where comments.userid = '$userid'";

            return $this->conn->query($sqlQuery);
        }
        
    }

    $users = new Users();
?>