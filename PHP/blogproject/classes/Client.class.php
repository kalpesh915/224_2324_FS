<?php
    require("admin/classes/Connection.class.php");

    class Client extends Connection{
        public function getAllFAQ(){
            $sqlQuery = "select * from faq where status = 1";
            return $this->conn->query($sqlQuery);
        }

        public function getContactInfo(){
            $sqlQuery = "select * from contact where id = 1";
            return $this->conn->query($sqlQuery);
        }

        public function getSocialMediaLinks() {
            $sqlQuery = "select * from socialmedia where id = 1";
            return $this->conn->query($sqlQuery);
        }

        public function getAllTeamMembers(){
            $sqlQuery = "select * from team where status = 1";
            return $this->conn->query($sqlQuery);
        }

        public function getAllServices(){
            $sqlQuery = "select * from services where status = 1";
            return $this->conn->query($sqlQuery);
        }

        public function getSliderImages(){
            $sqlQuery = "select * from slider where status = 1";
            return $this->conn->query($sqlQuery);
        }

        public function getAllCategory(){
            $sqlQuery = "select * from category where status = 1";
            return $this->conn->query($sqlQuery);
        }

        public function storeNewMessage($senderemail, $subejct, $content){
            $sqlQuery = "insert into messages (senderemail, subject, content) values ('$senderemail', '$subejct', '$content')";
            $this->conn->query($sqlQuery);
        }

        public function checkUserExist($email){
            $sqlQuery = "select * from users where email = '$email'";
            $result = $this->conn->query($sqlQuery);

            if($result->num_rows > 0){
                return 1;
            }else{
                return 0;
            }
        }

        public function createNewUser($name, $email, $password, $gender, $phone, $photopath){
            $sqlQuery = "insert into users (name, email, password, gender, phone, photopath) values ('$name', '$email', '$password', '$gender', '$phone', '$photopath')";

            $this->conn->query($sqlQuery);
        }

        public function loginUser($email, $password){
            $sqlQuery = "select * from users where email = '$email'";
            $result = $this->conn->query($sqlQuery);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row["status"] == 1){
                        if(password_verify($password, $row["password"])){
                            return 1;
                        }else{
                            return 0;
                        }
                    }else{
                        return 2;
                    }
                }
            }else{
                return 0;
            }
        }

        public function getBlogs($limit = null, $id = null){
            if($limit == null){
                $sqlQuery = "select blogs.id, blogs.blogtitle, blogs.blogimagepath, blogs.created_at, category.categoryname, category.categoryclass from blogs inner join category on blogs.blogcategory  = category.id";
            }else{
                $sqlQuery = "select blogs.id, blogs.blogtitle, blogs.blogimagepath, blogs.created_at, category.categoryname, category.categoryclass from blogs inner join category on blogs.blogcategory  = category.id where blogs.id != $id order by created_at desc  limit $limit";
            }

            return $this->conn->query($sqlQuery);
        }

        public function getMetaInfo(){
            $sqlQuery = "select * from seo where id = 1";
            return $this->conn->query($sqlQuery);
        }

        public function getBlog($id){
            $sqlQuery = "SELECT blogs.id, blogs.blogtitle, blogs.blogcontent, blogs.blogimagepath, blogs.blogcomment, blogs.created_at, category.categoryname from blogs inner join category on blogs.blogcategory = category.id where blogs.id = $id";

            return $this->conn->query($sqlQuery);
        }

        public function countUsers(){
            $sqlQuery = "select count(id) as count from users";
            $result = $this->conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                return $row["count"];
            }
        }

        public function countBlogs(){
            $sqlQuery = "select count(id) as count from blogs";
            $result = $this->conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                return $row["count"];
            }
        }

        public function countComments(){
            $sqlQuery = "select count(id) as count from comments";
            $result = $this->conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                return $row["count"];
            }
            
        }

        public function postComment($userid, $blogid, $commenttext){
            $sqlQuery = "insert into comments (userid, blogid, commenttext) values ('$userid', '$blogid', '$commenttext')";
            $this->conn->query($sqlQuery);
        }

        public function getComments($blogid){
            $sqlQuery = "select * from comments where blogid = $blogid and adminstatus = 1 order by id desc";
            return $this->conn->query($sqlQuery);
        }
    }

    $client = new Client();
?>