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
    <h1>Get Method Example</h1>
    <form action="/getprocess" method="get">
        <div class="my-3">
            <label for="fname">Enter First Name</label>
            <input type="text" name="fname" id="fname" required class="form-control">
        </div>

        <div class="my-3">
            <label for="lname">Enter Last Name</label>
            <input type="text" name="lname" id="lname" required class="form-control">
        </div>

        <div class="my-3">
            <input type="submit" value="Send Data" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>

    <h1>Post Method Example</h1>
    <form action="/postprocess" method="post">
        @csrf
        <div class="my-3">
            <label for="fname">Enter First Name</label>
            <input type="text" name="fname" id="fname" required class="form-control">
        </div>

        <div class="my-3">
            <label for="lname">Enter Last Name</label>
            <input type="text" name="lname" id="lname" required class="form-control">
        </div>

        <div class="my-3">
            <input type="submit" value="Send Data" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>
</body>
</html>