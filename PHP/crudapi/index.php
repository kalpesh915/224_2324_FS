<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API AJAX CRUD</title>
    <?php require_once("commons/cdn.php"); ?>
</head>

<body>
    <div class="container-fluid">
        <div class="bg-primary text-white text-center p-3 d-flex justify-content-between">
            <h1 class="text-center">AJAX CRUD API Example</h1>
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addnewuser">Add</button>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody id="data">

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

<?php require_once("modals.php"); ?>

<!-- JQUERY / JS code for Add New USER API Call -->
<script src="myscript.js"></script>