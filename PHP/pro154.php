<?php
    $student = ["Yash", "Prince", "Bhavya", "Het", "Bhavin", "Yash", "Rajiv", "Nisarg"];

    echo "<hr> Original Array is ";
    print_r($student);

    //sort($student);
    rsort($student);
    
    echo "<hr> Updated Array is ";
    print_r($student);

?>