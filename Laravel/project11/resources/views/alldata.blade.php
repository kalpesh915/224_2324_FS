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

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($studentsData as $student)
                    <tr>
                        <td>{{$student["id"]}}</td>
                        <td>{{$student["fname"]}}</td>
                        <td>{{$student["lname"]}}</td>
                        <td>{{$student["city"]}}</td>
                        <td>{{$student["created_at"]}}</td>
                        <td>{{$student["updated_at"]}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>