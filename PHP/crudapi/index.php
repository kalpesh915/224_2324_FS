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
    </div>
</body>
</html>

<!-- Add User Model -->
<div class="modal fade" id="addnewuser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addnewuserform">
            <div class="my-2 form-floating">
                <input type="text" name="fname" id="fname" required class="form-control"  placeholder="Enter First Name">
                <label for="fname" class="form-label">Enter First Name</label>
            </div>
            <div class="my-2 form-floating">
                <input type="text" name="lname" id="lname" required class="form-control"  placeholder="Enter Last Name">
                <label for="lname" class="form-label">Enter Last Name</label>
            </div>
            <div class="my-2 form-floating">
                <input type="text" name="city" id="city" required class="form-control"  placeholder="Enter City Name">
                <label for="city" class="form-label">Enter City Name</label>
            </div>
            <div class="my-2 form-floating">
                <select class="form-select" name="gender" id="gender">
                    <option></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <label for="gender" class="form-label">Enter Gender</label>
            </div>
            <div class="my-2 form-floating">
                <input type="email" name="email" id="email" required class="form-control"  placeholder="Enter Email Address">
                <label for="email" class="form-label">Enter Email Address</label>
            </div>
            <div class="my-2 form-floating">
                <input type="text" name="phone" id="phone" required class="form-control"  placeholder="Enter Phone Number" pattern="\d{10,13}">
                <label for="phone" class="form-label">Enter Phone Number</label>
            </div>
            <div class="my-2">
                <input type="submit" value="Add New User" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- JQUERY / JS code for Add New USER API Call -->
 <script>
    $(document).ready(function(){
        // get new user form submitted or not
        $("#addnewuserform").on("submit", function(e){
            e.preventDefault();
            //alert("Form Submitted");
            let formData = new FormData(this);
            formData.append("save_user", true);
            //console.log(formData);

            $.ajax({
                url:"api/userapi.php",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,              
                success: function(response){
                    //console.log(response);
                    const res = jQuery.parseJSON(response);
                    if(res.code == 200){
                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $("#addnewuser").modal("hide");
                        $("#addnewuserform")[0].reset();
                    }
                }
            });
        });
    });
 </script>