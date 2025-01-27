<?php
    require_once("Connection.class.php");

    class Settings extends Connection{
        public function getSettings(){
            $sqlQuery = "select comment, googletranslate from settings where id = 1";
            return $this->conn->query($sqlQuery);
        }

        public function setSettings($comment, $googletranslate){
            $sqlQuery = "update settings set comment = '$comment', googletranslate = '$googletranslate' where id = 1";
            $this->conn->query($sqlQuery);
        }
    }

    $settings = new Settings();
?>