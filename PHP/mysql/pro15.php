<?php
/* select data from mysql table */

// required variables
$hostname = "localhost";
$username = "root";
$password = "";
$database = "224mysql";

// Create a connection
//$conn = new mysqli("localhost", "root", "", "224mysql");
$conn = new mysqli($hostname, $username, $password, $database);

// check for connection
if ($conn->connect_error) {
    die("Connection Closed " . $conn->connect_error);
}

// create query 
$sqlQuery = "select * from students";
//$sqlQuery = "select id, fname, lname, city from students";

// create result
$result = $conn->query($sqlQuery);

//print_r($result);
// check number of rows in result
if ($result->num_rows > 0) {
    // data printing
    // fetch data from resultset
    /*while ($row = $result->fetch_array()) {
        print_r($row);
        echo "<hr>";
    }*/
    /*while ($row = $result->fetch_assoc()) {
        print_r($row);
        echo "<hr>";
    }*/
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        print_r($row);
        echo "<hr>";
    }
} else {
    // message 
    echo "<hr>No Data Found in Table<hr>";
}

// connection close
$conn->close();
