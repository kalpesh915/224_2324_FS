<?php
    require_once("Connection.class.php");

    class SMTP extends Connection{
        // get all SMTP Information
        public function getAllSMTPInfo(){
            $sqlQuery = "select * from smtpconfig where id = 1";
            return $this->conn->query($sqlQuery);
        }

        public function updateSMTPInfo($smtphostname, $smtpusername, $smtppassword, $smtpsecure, $smtpport){
            $sqlQuery = "update smtpconfig set smtphostname = '$smtphostname', smtpusername = '$smtpusername', smtppassword = '$smtppassword', smtpsecure = '$smtpsecure', smtpport = '$smtpport' where id = 1";
            $this->conn->query($sqlQuery);
        }
    }

    $smtp = new SMTP();
?>