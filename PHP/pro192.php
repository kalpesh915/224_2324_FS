<?php
    //print_r($_SERVER);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>

        
            <?php
                foreach($_SERVER as $key => $value){
                    echo "<tr>
                        <td>$key</td>
                        <td>$value</td>
                    </tr>";            
                }
            ?>
        
    </table>
</body>
</html>