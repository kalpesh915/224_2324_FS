<?php
    require_once("commons/session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php require_once("commons/cdn.php"); ?>
</head>
<body>
    <?php require_once("commons/menu.php"); ?>

    <div class="container-fluid">
        <h1 class="bg-primary text-white p-5">Welcome <?= $username;?>,</h1>

        <?php
            require_once("classes/Users.class.php");
            $result = $users->getProfile($username);

            while($row = $result->fetch_assoc()){
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