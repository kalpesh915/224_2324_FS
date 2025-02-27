<?php
    require_once("Connection.class.php");

    class ForgotPassword extends Connection{
        public function checkUserExist($email){
            $sqlQuery = "select * from adminusers where email = '$email'";
            $result = $this->conn->query($sqlQuery);

            if($result->num_rows > 0){
                return true;
            }else{
                return false;
            }
        }

        public function readSMTPInfo(){
            $sqlQuery = "select * from smtpconfig";
            return $this->conn->query($sqlQuery);
        }

        public function addOTPEntry($email, $otp, $created, $expire){
            $sqlQuery = "delete from otpentry where email = '$email'";
            $this->conn->query($sqlQuery);
            
            $sqlQuery = "insert into otpentry (email, otp, created_at, expire_at) values ('$email', '$otp', '$created', '$expire')";

            $this->conn->query($sqlQuery);
        }

        public function verifyOTP($email, $otp){
            $sqlQuery = "select * from otpentry where email = '$email' and otp = '$otp'";

            $result = $this->conn->query($sqlQuery);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if(strtotime($row["expire_at"]) > time()){
                        return 1; // OTP and Time Match
                    }else{
                        return 2; // OTP Match but Expired
                    }
                }
            }else{
                return 0; // OTP not Match
            }
        }

        public function changePassword($email, $password){
            $sqlQuery = "update adminusers set password = '$password' where email = '$email'";
            $this->conn->query($sqlQuery);
        }
    }

    $forgotPassword = new ForgotPassword();
?>