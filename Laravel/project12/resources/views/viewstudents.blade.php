<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('cdn')
</head>

<body>
    @include('menu')
    <div class="container-fluid">
        <h1 class="text-white bg-primary text-center p-3">View Students</h1>
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Error : </strong> {{ session('error') }}
            </div>
        @elseif (session('success'))
            <div class="alert alert-success alert-dismissible">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success : </strong> {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($studentsData as $student)
                        <tr>
                            <td>{{ $student['id'] }}</td>
                            <td>{{ $student['fname'] }}</td>
                            <td>{{ $student['lname'] }}</td>
                            <td>{{ $student['email'] }}</td>
                            <td>{{ $student['phone'] }}</td>
                            <td>{{ $student['gender'] }}</td>
                            <td>
                                <button type="button" class="btn btn-danger"
                                    onclick="deleteStudent({{ $student['id'] }})">
                                    <i class="fa fa-trash"></i>
                                </button>

                                <button type="button" class="btn btn-primary mx-3"
                                    onclick="editStudent({{ $student['id'] }})">
                                    <i class="fa fa-pen"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

<script>
    function deleteStudent(studentID) {
        //alert(studentID);
        if (confirm("Are you sure to delete this record ??")) {
            window.location.assign("/deletestudent/" + studentID);
        }
    }

    function editStudent(studentID) {
        if (confirm("Are you sure to Edit this record ??")) {
            window.location.assign("/getstudent/" + studentID);
        }
    }
</script>
