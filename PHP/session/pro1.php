<?php
    session_start();

    $_SESSION["firstname"] = "Bhavya";
    $_SESSION["lastname"] = "Dava";
    $_SESSION["city"] = "Morbi";

    print_r($_SESSION);
?>