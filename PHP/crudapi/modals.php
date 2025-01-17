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
                        <input type="text" name="fname" id="fname" required class="form-control" placeholder="Enter First Name">
                        <label for="fname" class="form-label">Enter First Name</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="text" name="lname" id="lname" required class="form-control" placeholder="Enter Last Name">
                        <label for="lname" class="form-label">Enter Last Name</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="text" name="city" id="city" required class="form-control" placeholder="Enter City Name">
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
                        <input type="email" name="email" id="email" required class="form-control" placeholder="Enter Email Address">
                        <label for="email" class="form-label">Enter Email Address</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="text" name="phone" id="phone" required class="form-control" placeholder="Enter Phone Number" pattern="\d{10,13}">
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

<!-- View User Model -->
<div class="modal fade" id="viewuser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">View User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="my-2 form-floating">
                        <input type="text" id="viewfname" readonly required class="form-control" placeholder="Enter First Name">
                        <label for="fname" class="form-label">Enter First Name</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="text" id="viewlname" readonly required class="form-control" placeholder="Enter Last Name">
                        <label for="lname" class="form-label">Enter Last Name</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="text" id="viewcity" readonly required class="form-control" placeholder="Enter City Name">
                        <label for="city" class="form-label">Enter City Name</label>
                    </div>
                    <div class="my-2 form-floating">
                        <select class="form-select" id="viewgender">
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label for="gender" class="form-label">Enter Gender</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="email" id="viewemail" readonly required class="form-control" placeholder="Enter Email Address">
                        <label for="email" class="form-label">Enter Email Address</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="text" id="viewphone" readonly required class="form-control" placeholder="Enter Phone Number" pattern="\d{10,13}">
                        <label for="phone" class="form-label">Enter Phone Number</label>
                    </div>                    
            </div>
        </div>
    </div>
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="edituser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="edituserform">
                    <div class="my-2 form-floating">
                        <input type="text" name="id" id="editid" required class="form-control" placeholder="Enter ID" readonly>
                        <label for="editid" class="form-label">Enter ID</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="text" name="fname" id="editfname" required class="form-control" placeholder="Enter First Name">
                        <label for="fname" class="form-label">Enter First Name</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="text" name="lname" id="editlname" required class="form-control" placeholder="Enter Last Name">
                        <label for="lname" class="form-label">Enter Last Name</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="text" name="city" id="editcity" required class="form-control" placeholder="Enter City Name">
                        <label for="city" class="form-label">Enter City Name</label>
                    </div>
                    <div class="my-2 form-floating">
                        <select class="form-select" name="gender" id="editgender">
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label for="gender" class="form-label">Enter Gender</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="email" name="email" id="editemail" required class="form-control" placeholder="Enter Email Address">
                        <label for="email" class="form-label">Enter Email Address</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="text" name="phone" id="editphone" required class="form-control" placeholder="Enter Phone Number" pattern="\d{10,13}">
                        <label for="phone" class="form-label">Enter Phone Number</label>
                    </div>
                    <div class="my-2">
                        <input type="submit" value="Update User" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>