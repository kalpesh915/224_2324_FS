<?php
    require_once("conn.php");

    if(isset($_SERVER["REQUEST_METHOD"]) == "POST"){
        

        if(isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["city"]) && isset($_POST["gender"]) && isset($_POST["phone"]) && isset($_POST["email"])){
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $city = $_POST["city"];
            $gender = $_POST["gender"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];

            $sqlquery = "insert into users (fname, lname, city, gender, phone, email) values ('$fname', '$lname', '$city', '$gender', '$phone', '$email')";
            $conn->query($sqlquery);

            $response = ["message" => "New User Created with ".$conn->insert_id." ID"];
        }else{
            $response = ["message" => "Please fill all the fields"];
        }
    }else{
        $response = ["message" => "Invalid Method Selected"];
    }

    echo json_encode($response);
?>