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
        <h1 class="text-white bg-primary p-2 text-center">Edit Student</h1>

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

        <form action="/updateprocess" method="post">
            @csrf
            <div class="my-2 form-floating">
                <input type="text" name="id" id="id" required class="form-control" placeholder="Enter ID" value="{{$studentData['id']}}" readonly>
                <label for="id" class="form-label">Enter ID</label>
            </div>
            <div class="my-2 form-floating">
                <input type="text" name="fname" id="fname" required class="form-control" placeholder="Enter First Name" value="{{$studentData['fname']}}">
                <label for="fname" class="form-label">Enter First Name</label>
            </div>
            <div class="my-2 form-floating">
                <input type="text" name="lname" id="lname" required class="form-control" placeholder="Enter Last Name" value="{{$studentData['lname']}}">
                <label for="lname" class="form-label">Enter Last Name</label>
            </div>
            <div class="my-2 form-floating">
                <input type="email" name="email" id="email" required class="form-control" placeholder="Enter Email Address" value="{{$studentData['email']}}">
                <label for="email" class="form-label">Enter Email Address</label>
            </div>
            <div class="my-2 form-floating">
                <input type="text" name="phone" id="phone" required class="form-control" placeholder="Enter Phone Number" value="{{$studentData['phone']}}">
                <label for="phone" class="form-label">Enter Phone Number</label>
            </div>
            <div class="my-2 form-floating">
                <select name="gender" id="gender" required class="form-control" placeholder="Select Gender">
                    <option></option>
                    <option value="male" {{ $studentData["gender"] == "male" ?"selected" : "" }}>Male</option>
                    <option value="female" {{ $studentData["gender"] == "female" ? "selected" : "" }}>Female</option>
                </select>
                <label for="gender" class="form-label">Select Gender</label>
            </div>

            <div class="my-3">
                <input type="submit" value="Update Student" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>

</html>
