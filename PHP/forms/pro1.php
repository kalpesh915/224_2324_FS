<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fname = $lname = $email = $website = $comment = $gender = "";
        $fnameErr = $lnameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
        
        if(isset($_POST["process"])){
            $fname = filterInput($_POST["fname"]);
            $lname = filterInput($_POST["lname"]);
            $email = filterInput($_POST["email"]);
            $website = filterInput($_POST["website"]);
            $comment = filterInput($_POST["comment"]);
            $gender = filterInput($_POST["gender"]);

            echo "Welcome $fname $lname email is $email comment is $comment website $website and gender is $gender";
        }

        function filterInput($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>


    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Enter First Name</label>
        <input type="text" name="fname"><br>
        <label>Enter Last Name</label>
        <input type="text" name="lname"><br>
        <label>Enter EMail</label>
        <input type="text" name="email"><br>
        <label>Enter Website</label>
        <input type="text" name="website"><br>
        <label>Enter Comment</label>
        <textarea name="comment"></textarea><br>
        <label>Select Gender</label>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female<br>
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>