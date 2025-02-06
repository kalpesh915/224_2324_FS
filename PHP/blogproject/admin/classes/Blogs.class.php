<?php
    require_once("Connection.class.php");

    class Blogs extends Connection{
        public function getAllCategory(){
            $sqlQuery = "select * from category";
            return $this->conn->query($sqlQuery);
        }

        public function addNewBlog($blogtitle, $blogcategory, $blogcontent, $blogimage, $blogcomment){
            $sqlQuery = "insert into blogs (blogtitle, blogcategory, blogcontent, blogimagepath, blogcomment) values ('$blogtitle', '$blogcategory', '$blogcontent', '$blogimage', '$blogcomment')";

            $this->conn->query($sqlQuery);
        }

        public function getAllBlogs(){
            $sqlQuery = "SELECT blogs.id, blogs.blogtitle, blogs.blogimagepath, blogs.status, blogs.created_at, category.categoryname from blogs INNER join category on category.id = blogs.blogcategory; ";

            return $this->conn->query($sqlQuery);
        }

        public function updateBlogStatus($id, $status){
            $sqlQuery = "update blogs set status = $status where id = $id";
            $this->conn->query($sqlQuery);
        }

        public function getOneBlog($id){
            $sqlQuery = "select * from blogs where id = $id";
            return $this->conn->query($sqlQuery);
        }

        public function updateBlog($id, $blogtitle, $blogcategory, $blogcontent, $blogimage = null, $blogcomment){
            if($blogimage !== null){
                // delete existing blog image

                $sqlQuery = "select blogimagepath from blogs where id = $id";
                $result = $this->conn->query($sqlQuery);
                while($row = $result->fetch_assoc()){
                    unlink($row["blogimagepath"]);
                }

                // update new image
                $sqlQuery = "update blogs set blogimagepath = '$blogimage' where id = $id";
                $this->conn->query($sqlQuery);
            }

            $sqlQuery = "update blogs set blogtitle = '$blogtitle', blogcategory = '$blogcategory', blogcontent = '$blogcontent', blogcomment = '$blogcomment' where id = $id";
            $this->conn->query($sqlQuery);
        }
    }

    $blogs = new Blogs();
?>