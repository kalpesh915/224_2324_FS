<?php
    require_once("commons/session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs</title>
    <?php
        require_once("commons/cdn.php");
    ?>
</head>
<body>
    <?php
        require_once("commons/menu.php");
    ?>

    <div class="container-fluid">
        <h1 class="bg-primary text-white text-center p-5">Activity Logs</h1>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Time Stamp</th>
                        <th>Event</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        require_once("classes/Users.class.php");

                        $result = $users->getActivityLogs($username);

                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                <td>$row[eventtime]</td>
                                <td>$row[event]</td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>       
    </div>
</body>
</html>