<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-header fname="Het" lname="Manani" />
    <h1>About Blade File</h1>
    <h1>{{$username}}</h1>
    <h1>{{ 10 + 20 }}</h1>

    {{-- @if (10 == 10)
        <p>True</p>
    @else
        <p>False</p>
    @endif --}}
    
{{-- 
    @if (10 == 10)
        <p>Both are Same</p>
    @elseif (10 != 10)
        <p>Not Same</p>
    @else
        <p>Else Part</p>
    @endif --}}

    {{-- @for ($i=1; $i<=5; $i++)
        <p>Welcome {{$i}}</p>
    @endfor --}}

{{-- 
    @foreach ($students as $student)
        <p>Welcome {{$student}}</p>
    @endforeach --}}
</body>
</html>

<script>
    //alert("Welcome");
    alert(@json($students));
</script>