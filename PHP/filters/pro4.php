<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Filter Type</th>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach(filter_list() as $key => $value){
                    echo "<tr>
                        <td>$key</td>
                        <td>$value</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>