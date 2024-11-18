<?php
    // define
    function greetings(string $username, int $roll){
        echo "<hr> Welcome $username to world of functions in PHP your roll no. is $roll";
    }

    greetings("Bhavya Dava", 11);
    //greetings(12, "Bhavin Gohel");
    greetings(12, 111);
    greetings(12, "111");
    greetings("Het Manani", 10);
?>