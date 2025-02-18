<div class="modal fade" id="login" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="my-2 form-floating">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required>
                        <label for="email" class="form-label">Enter Email Address</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Email Password" required>
                        <label for="password" class="form-label">Enter Email Password</label>
                    </div>
                    <div class="my-2 text-center">
                        <input type="submit" value="Login" class="btn btn-primary" name="loginProcess">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
                <div class="my-3 text-center">
                    <a href="forgotpassword">Forgot Password</a> | <a href="#signup" data-bs-toggle="modal" data-bs-dismiss="modal">Create Account</a>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="signup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Sing UP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                    <div class="my-2 form-floating">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" required>
                        <label for="name" class="form-label">Enter Your Name</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required>
                        <label for="email" class="form-label">Enter Email Address</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Email Password" required>
                        <label for="password" class="form-label">Enter Email Password</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Enter Confirm Email Password" required>
                        <label for="cpassword" class="form-label">Enter Confirm Email Password</label>
                    </div>
                    <div class="my-2 form-floating">
                        <select type="password" name="gender" id="gender" class="form-control" placeholder="Select Gender" required>
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label for="gender" class="form-label">Select Gender</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number" required>
                        <label for="cpassword" class="form-label">Enter Phone Number</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="file" name="profilephoto" id="profilephoto" class="form-control" placeholder="Select Profile Photo" required accept=".jpg, .jpeg">
                        <label for="profilephoto" class="form-label">Select Profile Photo</label>
                    </div>
                    <div class="my-2 text-center">
                        <input type="submit" value="Signup" class="btn btn-primary" name="signupProcess" id="signupbtn">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
                <div class="my-3 text-center">
                    <a href="#login" data-bs-toggle="modal" data-bs-dismiss="modal">Already Have Account</a>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="logout" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="my-2 text-center">
                        <input type="submit" value="Confirm Logout" class="btn btn-primary" name="logoutProcess">
                    </div>
                </form>

            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>