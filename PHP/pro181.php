<?php   
    /*
    
    */
    $firstname = "Peter";
    $lastname = "Griffin";
    $age = "41";
    $gender = "Male";

    $result = compact("firstname", "lastname", "age", "gender");

    print_r($result);
?>