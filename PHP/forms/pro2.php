<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $fname = $lname = $email = $website = $comment = $gender = "";
        $fnameErr = $lnameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
        
        if(isset($_POST["process"])){
            if(empty($_POST["fname"])){
                $fnameErr = "First Name is Required";
            }else{
                $fname = filterInput($_POST["fname"]);
            }

            if(empty($_POST["lname"])){
                $lnameErr = "Last Name is Requires";
            }else{
                $lname = filterInput($_POST["lname"]);
            }
            
            if(empty($_POST["email"])){
                $emailErr = "Email Address is Required";
            }else{
                if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === $_POST["email"]){
                    $email = filterInput($_POST["email"]);
                }else{
                    $emailErr = "Invalid EMail Address";
                }
            }
            
            if(empty($_POST["website"])){
                $websiteErr = "Website is Required";
            }else{
                if(filter_var($_POST["website"], FILTER_VALIDATE_URL) === $_POST["website"]){
                    $website = filterInput($_POST["website"]);
                }else{
                    $websiteErr = "Invalid URL";
                }
            }

            if(empty($_POST["comment"])){
                $commentErr = "Comment is Required";
            }else{
                $comment = filterInput($_POST["comment"]);
            }
            
            if(empty($_POST["gender"])){
                $genderErr = "Gender is Required";
            }else{
                $gender = filterInput($_POST["gender"]);
            }
            
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
        <input type="text" name="fname"> <span class="error"> * <?= $fnameErr; ?></span><br>
        <label>Enter Last Name</label>
        <input type="text" name="lname"><span class="error"> * <?= $lnameErr; ?></span><br>
        <label>Enter EMail</label>
        <input type="text" name="email"><span class="error"> * <?= $emailErr; ?></span><br>
        <label>Enter Website</label>
        <input type="text" name="website"><span class="error"> * <?= $websiteErr; ?></span><br>
        <label>Enter Comment</label>
        <textarea name="comment"></textarea><span class="error"> * <?= $commentErr; ?></span><br>
        <label>Select Gender</label>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female <span class="error"> * <?= $genderErr; ?></span><br>
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>