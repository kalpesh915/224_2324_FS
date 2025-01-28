<?php
    require_once("Connection.class.php");

    class Social extends Connection{
        public function getAllSocialMediaLinks(){
            $sqlQuery = "select * from socialmedia";
            return $this->conn->query($sqlQuery);
        }

        public function updateSocialMediaLinks($facebook, $instagram, $linkedin, $youtube, $snapchat, $telegram, $whatsapp, $twitter){
            $sqlQuery = "update socialmedia set facebook = '$facebook', instagram = '$instagram', linkedin = '$linkedin', youtube = '$youtube', snapchat = '$snapchat', telegram = '$telegram', whatsapp = '$whatsapp', twitter = '$twitter' where id = 1";
            $this->conn->query($sqlQuery);
        }
    }

    $social = new Social();
?>