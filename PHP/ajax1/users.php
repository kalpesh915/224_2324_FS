<?php
    require_once("conn.php");

    $id = $_REQUEST["id"];

    $sqlQuery = "select * from users where id = $id";
    
    $result = $conn->query($sqlQuery);

    while($row = $result->fetch_assoc()){
        $table = "<table border='1'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>

            <tr>
                <td>$row[id]</td>
                <td>$row[fname]</td>
                <td>$row[lname]</td>
                <td>$row[city]</td>
                <td>$row[gender]</td>
                <td>$row[phone]</td>
                <td>$row[email]</td>
                <td>$row[created_at]</td>
                <td>$row[updated_at]</td>
            </tr>
        </table>";
    }

    echo $table;
?>