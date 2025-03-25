<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include("cdn")
</head>
<body>
    <h1 class="text-bg-primary p-3 text-center">Get Method Example</h1>
    <form action="/getprocess" method="get">
        <div class="my-3 form-floating">
            <input type="text" name="fname" id="fname" placeholder="Enter First Name" class="form-control" required>
            <label for="fname" class="form-label">Enter First Name</label>
        </div>

        <div class="my-3 form-floating">
            <input type="text" name="lname" id="lname" placeholder="Enter Last Name" class="form-control" required>
            <label for="lname" class="form-label">Enter Last Name</label>
        </div>

        <div class="my-3">
            <input type="submit" value="Send Data" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>

    <h1 class="text-bg-primary p-3 text-center">Post Method Example</h1>
    <form action="/postprocess" method="post">
        @csrf
        <div class="my-3 form-floating">
            <input type="text" name="fname" id="fname" placeholder="Enter First Name" class="form-control" required>
            <label for="fname" class="form-label">Enter First Name</label>
        </div>

        <div class="my-3 form-floating">
            <input type="text" name="lname" id="lname" placeholder="Enter Last Name" class="form-control" required>
            <label for="lname" class="form-label">Enter Last Name</label>
        </div>

        <div class="my-3">
            <input type="submit" value="Send Data" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>

    <h1 class="text-bg-primary p-3 text-center">Put Method Example</h1>
    <form action="/putprocess" method="post">
        @csrf
        {{method_field("put")}}
        <div class="my-3 form-floating">
            <input type="text" name="fname" id="fname" placeholder="Enter First Name" class="form-control" required>
            <label for="fname" class="form-label">Enter First Name</label>
        </div>

        <div class="my-3 form-floating">
            <input type="text" name="lname" id="lname" placeholder="Enter Last Name" class="form-control" required>
            <label for="lname" class="form-label">Enter Last Name</label>
        </div>

        <div class="my-3">
            <input type="submit" value="Send Data" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>

    <h1 class="text-bg-primary p-3 text-center">Delete Method Example</h1>
    <form action="/deleteprocess" method="post">
        @csrf
        {{method_field("delete")}}
        <div class="my-3 form-floating">
            <input type="text" name="fname" id="fname" placeholder="Enter First Name" class="form-control" required>
            <label for="fname" class="form-label">Enter First Name</label>
        </div>

        <div class="my-3 form-floating">
            <input type="text" name="lname" id="lname" placeholder="Enter Last Name" class="form-control" required>
            <label for="lname" class="form-label">Enter Last Name</label>
        </div>

        <div class="my-3">
            <input type="submit" value="Send Data" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>
</body>
</html>