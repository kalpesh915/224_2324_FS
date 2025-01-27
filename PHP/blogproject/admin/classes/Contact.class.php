<?php
    require_once("Connection.class.php");

    class Contact extends Connection{
        public function getContactDetails(){
            $sqlQuery = "select * from contact where id = 1";
            return $this->conn->query($sqlQuery);
        }

        public function updateContactDetails($contactperson, $phonenumber, $emailaddress, $address, $googlemap){
            $sqlQuery = "update contact set contactperson = '$contactperson', phonenumber = '$phonenumber', emailaddress = '$emailaddress', address = '$address', googlemap = '$googlemap' where id = 1";
            $this->conn->query($sqlQuery);
        }
    }

    $contact = new Contact();
?>