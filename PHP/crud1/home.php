<?php
    require_once("session.php");
    require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once("cdn.php"); ?>
</head>
<body>
    <?php
        require_once("menu.php");
    ?>

    <div class="container-fluid">
        <h1 class="bg-primary text-white p-5">Welcome <?= $username;?>,</h1>
        <?php
            $sqlQuery = "select * from users where email = '$username'";
            $result = $conn->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                //print_r($row);
                // convert all array elements to variable
                extract($row);
            }
        ?>
        <div class="row">
            <div class="col-md-4">
                <img src="<?= $photopath; ?>" class="w-75 d-block mx-auto rounded">
            </div>
            <div class="col-md-8">
                <table class="table table-hover table-striped">
                    <tr>
                        <th>First Name</th>
                        <td><?= $fname; ?></td>
                    </tr>

                    <tr>
                        <th>Last Name</th>
                        <td><?= $lname; ?></td>
                    </tr>

                    <tr>
                        <th>City</th>
                        <td><?= $city; ?></td>
                    </tr>

                    <tr>
                        <th>Gender</th>
                        <td><?= $gender; ?></td>
                    </tr>

                    <tr>
                        <th>Phone</th>
                        <td><?= $phone; ?></td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td><?= $email; ?></td>
                    </tr>

                    <tr>
                        <th>Created AT</th>
                        <td><?= $created_at; ?></td>
                    </tr>

                    <tr>
                        <th>Updated AT</th>
                        <td><?= $updated_at;?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>