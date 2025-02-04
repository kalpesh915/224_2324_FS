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
    }

    $blogs = new Blogs();
?>