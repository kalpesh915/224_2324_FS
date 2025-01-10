<?php
require_once("../classes/Users.class.php");

if (isset($_POST["save_user"])) {
    if (isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["city"]) && isset($_POST["gender"]) && isset($_POST["email"]) && isset($_POST["phone"])) {
        $fname = $users->filterData($_POST["fname"]);
        $lname = $users->filterData($_POST["lname"]);
        $city = $users->filterData($_POST["city"]);
        $gender = $users->filterData($_POST["gender"]);
        $phone = $users->filterData($_POST["phone"]);
        $email = $users->filterData($_POST["email"]);

        $id = $users->addNewUser($fname, $lname, $city, $gender, $email, $phone);

        if ($id > 0) {
            $response = [
                "code" => "200",
                "message" => "New User Created with $id ID."
            ];
        } else {
            $response = [
                "code" => "500",
                "message" => "Error while creating new user"
            ];
        }
    } else {
        $response = [
            "code" => "422",
            "message" => "Please Fill out all the Fields"
        ];
    }

    echo json_encode($response);
} else if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
    $id = $users->filterData($_GET["id"]);
    //echo "OK $id";
    $rows = $users->deleteUser($id);
    if ($rows > 0) {
        $response = [
            "code" => 200,
            "message" => "Data Deleted with ID $id"
        ];
    } else {
        $response = [
            "code" => 404,
            "message" => "Data Not Deleted because $id not Found"
        ];
    }

    echo json_encode($response);
} else if (isset($_SERVER["REQUEST_METHOD"]) == "GET") {
    //echo "CALLED";
    if (isset($_GET["id"])) {
        // code for get one user by id
        echo "One User";
    } else {
        // code for get all users

        $result = $users->getAllUsers();
        $usersData = [];

        while ($row = $result->fetch_assoc()) {
            array_push($usersData, $row);
        }
        echo json_encode([
            "code" => 200,
            "message" => "Data Found",
            "users" => $usersData
        ]);
    }
}
