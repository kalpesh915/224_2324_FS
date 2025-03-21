<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>

    @include("commons.cdn")
</head>
<body>
    @include("commons.menu")
    @include("commons.header")
    <div class="row">
        <div class="col-md-4">
            @yield("sidebar")
        </div>
        <div class="col-md-8">
            @yield("content")
        </div>
    </div>
    @include("commons.footer")
</body>
</html>