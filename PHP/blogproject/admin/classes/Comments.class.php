<?php

    require_once("Connection.class.php");

    class Comments extends Connection{
        public function getAllPendingComments(){
            $sqlQuery = "select comments.id, comments.commentdate, comments.userid, comments.commenttext, blogs.blogtitle from comments inner join blogs on comments.blogid = blogs.id where comments.status = 0 and comments.adminstatus = 0";

            return $this->conn->query($sqlQuery);
        }

        public function getAllComments(){
            $sqlQuery = "select comments.id, comments.commentdate, comments.userid, comments.commenttext, comments.adminstatus, blogs.blogtitle from comments inner join blogs on comments.blogid = blogs.id ";

            return $this->conn->query($sqlQuery);
        }

        public function getOneComment($id){
            $sqlQuery = "select comments.id, comments.commentdate, comments.userid, comments.commenttext, blogs.blogtitle from comments inner join blogs on comments.blogid = blogs.id where comments.id = $id";
            return $this->conn->query($sqlQuery);
        }

        public function changeCommentStatus($id){
            $sqlQuery = "update comments set status = 1 where id = $id";
            $this->conn->query($sqlQuery);
        }

        public function changeCommentAllowStatus($id, $status){
            $sqlQuery = "update comments set adminstatus = $status where id = $id";
            $this->conn->query($sqlQuery);
        }
    }

    $comments = new Comments();
?>