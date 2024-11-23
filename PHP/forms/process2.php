<?php 
    //print_r($_GET);

    // $fname = $_GET["fname"];
    // $lname = $_GET["lname"];

    extract($_GET);

    echo "Welcome $fname $lname to $city";
?>