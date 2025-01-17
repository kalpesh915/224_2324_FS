
    $(document).ready(function() {
        // get new user form submitted or not
        $("#addnewuserform").on("submit", function(e) {
            e.preventDefault();
            //alert("Form Submitted");
            let formData = new FormData(this);
            formData.append("save_user", true);
            //console.log(formData);

            $.ajax({
                url: "api/userapi.php",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    const res = jQuery.parseJSON(response);
                    if (res.code == 200) {
                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(res.message);

                        $("#addnewuser").modal("hide");
                        $("#addnewuserform")[0].reset();

                        loadAllUsers();
                    }
                }
            });
        });
    });

    // Load All Students
    $(document).ready(function() {
        loadAllUsers();
    });

    function loadAllUsers() {
        //alert("Called");

        $.ajax({
            "method": "GET",
            "url": "api/userapi.php",
            success: function(response) {
                //console.log(response);
                const usersData = jQuery.parseJSON(response);
                //console.log(usersData);

                $("#data").empty();

                let users = ``;

                for (let x of usersData.users) {
                    users += `<tr>
                        <td>${x.id}</td>
                        <td>${x.fname}</td>
                        <td>${x.lname}</td>
                        <td>${x.city}</td>
                        <td>${x.gender}</td>
                        <td>${x.email}</td>
                        <td>${x.phone}</td>
                        <td>
                        <button type='button' class='btn btn-dark btn-show' value='${x.id}'><i class='fa fa-eye'></i></button>
                        <button type='button' class='btn btn-danger btn-delete' value='${x.id}'><i class='fa fa-trash'></i></button>
                        <button type='button' class='btn btn-secondary btn-edit' value='${x.id}'><i class='fa fa-pen'></i></button>
                        </td>
                    </tr>`;
                }

                $("#data").html(users);
            }
        });
    }

    // Delete API
    $(document).on("click", ".btn-delete", function() {
        //alert("OK");
        let id = $(this).val();
        //alert(id);
        if (confirm("Are you Sure to Delete Data with ID " + id + " ???")) {
            $.ajax({
                method: "DELETE",
                url: "api/userapi.php?id=" + id,
                success: function(response) {
                    //console.log(response);
                    const res = jQuery.parseJSON(response);
                    //console.log(res);
                    if (res.code == 200) {
                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(res.message);
                        loadAllUsers();
                    } else {
                        alertify.set('notifier', 'position', 'top-right');
                        alertify.error(res.message);
                    }
                }
            });
        }
    });

    // View API
    $(document).on("click", ".btn-show", function() {
        //alert("OK");
        let id = $(this).val();
        //alert(id);
        $.ajax({
            method: "GET",
            url: "api/userapi.php?id=" + id,
            success: function(response) {
                //console.log(response);
                const res = jQuery.parseJSON(response);
                //console.log(res);
                if (res.code == 200) {
                    //alert(res);
                    $("#viewuser").modal("show");
                    // Set Data in Modal
                    $("#viewfname").val(res.userData.fname);
                    $("#viewlname").val(res.userData.lname);
                    $("#viewcity").val(res.userData.city);
                    $("#viewgender").val(res.userData.gender);
                    $("#viewemail").val(res.userData.email);
                    $("#viewphone").val(res.userData.phone);
                } else {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.error(res.message);
                }
            }
        });
    });

    $(document).on("click", ".btn-edit", function(e){
        e.preventDefault();
        //alert("ok");
        let id = $(this).val();
        //alert(id);

        $.ajax({
            method:"GET",
            url: "api/userapi.php?id=" + id,
            success: function(response) {
                //console.log(response);
                const res = jQuery.parseJSON(response);
                //console.log(res);
                if (res.code == 200) {
                    //alert(res);
                    $("#edituser").modal("show");
                    // Set Data in Modal
                    $("#editid").val(res.userData.id);
                    $("#editfname").val(res.userData.fname);
                    $("#editlname").val(res.userData.lname);
                    $("#editcity").val(res.userData.city);
                    $("#editgender").val(res.userData.gender);
                    $("#editemail").val(res.userData.email);
                    $("#editphone").val(res.userData.phone);
                } else {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.error(res.message);
                }
            }
        });
    });


    $(document).on("submit", "#edituserform", function(e){
        e.preventDefault();
        //alert("Ok");
        let myformData = new FormData(this);
        myformData.append("update_user", true);
        //console.log(myformData);

        $.ajax({
            method : "POST",
            url : "api/userapi.php",
            contentType: false,
            processData: false,
            data : myformData,
            success: function(response) {
                //console.log(response);
                const res = jQuery.parseJSON(response);

                if(res.code == 200){
                    $("#edituserform")[0].reset();
                    $("#edituser").modal("hide");
                    loadAllUsers();

                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(res.message);
                }
            }
        });
    });