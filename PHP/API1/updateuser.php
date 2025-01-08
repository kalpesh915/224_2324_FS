<?php
require_once("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $json = file_get_contents('php://input');

    // Converts it into a PHP object
    $data = json_decode($json, true);

    if (isset($data["fname"]) && isset($data["lname"]) && isset($data["city"]) && isset($data["gender"]) && isset($data["email"]) && isset($data["phone"]) && isset($data["id"])) {

        $sqlQuery = "update users set fname = '$data[fname]', lname = '$data[lname]', city = '$data[city]', gender = '$data[gender]', phone = '$data[phone]', email = '$data[email]' where id = $data[id]";
        $conn->query($sqlQuery);

        $response = ["message" => $conn->affected_rows . " Records are updated"];
    } else {
        $response = ["message" => "Please fill all the fields"];
    }
} else {
    $response = ["message" => "Invalid method selected"];
}

echo json_encode($response);
