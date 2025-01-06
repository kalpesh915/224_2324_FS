<?php

    $a[] = "Anna";
    $a[] = "Brittany";
    $a[] = "Cinderella";
    $a[] = "Diana";
    $a[] = "Eva";
    $a[] = "Fiona";
    $a[] = "Gunda";
    $a[] = "Hege";
    $a[] = "Inga";
    $a[] = "Johanna";
    $a[] = "Kitty";
    $a[] = "Linda";
    $a[] = "Nina";
    $a[] = "Ophelia";
    $a[] = "Petunia";
    $a[] = "Amanda";
    $a[] = "Raquel";
    $a[] = "Cindy";
    $a[] = "Doris";
    $a[] = "Eve";
    $a[] = "Evita";
    $a[] = "Sunniva";
    $a[] = "Tove";
    $a[] = "Unni";
    $a[] = "Violet";
    $a[] = "Liza";
    $a[] = "Elizabeth";
    $a[] = "Ellen";
    $a[] = "Wenche";
    $a[] = "Vicky";
    $a[] = "Yash";
    $a[] = "Het";
    $a[] = "Prince";
    $a[] = "Bhavya";
    $a[] = "Yes";
    $a[] = "BHavin";
    $a[] = "Nisarg";
    $a[] = "Keyur";
    $a[] = "Rajiv";
    $a[] = "Trupti";


    $fname = $_REQUEST["fname"]; 
    // create empty variable
    $hint = "";

    if($fname !== ""){
        $fname = strtolower($fname);
        $len = strlen($fname); // b

        foreach($a as $name){
            if(stristr($fname, substr($name, 0, $len))){
                if($hint === ""){
                    $hint = $name;
                }else{
                    $hint.= ", $name";
                }
            }
        }
    }

    echo $hint === "" ? "No Suggestions" : $hint;
?>