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
    @include("menu")

    <form action="/uploadprocess" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file1" class="form-label">Select File for Upload</label>
        <input type="file" name="file1" id="file1" required accept=".jpg, .jpeg" class="form-control">
        <input type="submit" value="Upload File" class="btn btn-primary">
        <input type="reset" value="Reset" class="btn btn-danger">
    </form>
</body>
</html>