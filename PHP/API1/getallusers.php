<?php
require_once("conn.php");
// Backend
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $sqlQuery = "select * from users where id = $id";
    } else {
        $sqlQuery = "select * from users";
    }

    $result = $conn->query($sqlQuery);
    $data = [];

    while ($row = $result->fetch_assoc()) {
        array_push($data, $row);
    }

    if (count($data) == 0) {
        $response = ["message" => "No Data Found"];
    } else {
        $response = ["message" => "Data Found", "data" => $data];
    }

    echo json_encode($response);
} else {
    echo json_encode([
        "message" => "Invalid Method Selected"
    ]);
}
