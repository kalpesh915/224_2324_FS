<?php
require_once("../classes/Users.class.php");

    $id = $users->filterData($_POST["id"]);
    $fname = $users->filterData($_POST["fname"]);
    $lname = $users->filterData($_POST["lname"]);
    $city = $users->filterData($_POST["city"]);
    $gender = $users->filterData($_POST["gender"]);
    $phone = $users->filterData($_POST["phone"]);
    $email = $users->filterData($_POST["email"]);
    $users->updateUser($id, $fname, $lname, $city, $gender, $email, $phone);
    echo json_encode([
        "code" => 200,
        "message" => "User Updated"
    ]);
?>