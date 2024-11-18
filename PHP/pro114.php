<?php
    // define
    function greetings(string $username, int $roll = 0){
        echo "<hr> Welcome $username to world of functions in PHP your roll no. is $roll";
    }

    greetings("Bhavya Dava");
    greetings("Het Manani", 10);
?>