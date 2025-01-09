<?php
    require_once("../classes/Users.class.php");

    if(isset($_POST["save_user"])){
        if(isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["city"]) && isset($_POST["gender"]) && isset($_POST["email"]) && isset($_POST["phone"])){
            $fname = $users->filterData($_POST["fname"]);
            $lname = $users->filterData($_POST["lname"]);
            $city = $users->filterData($_POST["city"]);
            $gender = $users->filterData($_POST["gender"]);
            $phone = $users->filterData($_POST["phone"]);
            $email = $users->filterData($_POST["email"]);

            $id = $users->addNewUser($fname, $lname, $city, $gender, $email, $phone);

            if($id > 0){
                $response = [
                    "code" => "200",
                    "message" => "New User Created with $id ID."
                ];
            }else{
                $response = [
                    "code" => "500",
                    "message" => "Error while creating new user"
                ];
            }
        }else{
            $response = [
                "code" => "422",
                "message" => "Please Fill out all the Fields"
            ];
        }

        echo json_encode($response);
    }
?>