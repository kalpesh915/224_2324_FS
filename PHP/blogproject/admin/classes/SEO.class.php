<?php
    require_once("Connection.class.php");

    class SEO extends Connection{
        public function getSEODetails(){
            $sqlQuery = "select * from seo where id = 1";
            return $this->conn->query($sqlQuery);
        }

        public function updateSEODetails($metakeyword, $metadescription, $tagid){
            $sqlQuery = "update seo set metakeyword = '$metakeyword', metadescription = '$metadescription', tagid = '$tagid' where id = 1";
            $this->conn->query($sqlQuery);
        }
    }

    $seo = new SEO();
?>