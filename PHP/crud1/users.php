<?php
    require_once("session.php");
    require_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <?php require_once("cdn.php"); ?>
</head>
<body>
    <?php require_once("menu.php"); ?>

    <div class="container-fluid">
        <h1 class="bg-primary text-white p-5 text-center">Users</h1>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Photo</th>
                </thead>

                <tbody>
                    <?php
                        $sqlQuery = "select * from users where not email = '$username'";
                        $result = $conn->query($sqlQuery);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<tr>
                                    <td>$row[id]</td>
                                    <td>$row[fname]</td>
                                    <td>$row[lname]</td>
                                    <td>$row[gender]</td>
                                    <td>$row[city]</td>
                                    <td>$row[email]</td>
                                    <td>$row[phone]</td>
                                    <td><img src='$row[photopath]' class='rounded' style='width:100px;'></td>
                                </tr>";
                            }
                        }else{
                            echo "<tr>
                                <th colspan='8'>No Other Users Found in Table</th>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>