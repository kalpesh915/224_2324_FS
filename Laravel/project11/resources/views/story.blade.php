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
    <div class="container-fluid">
        <h1 class="display-1"> {{ __('story.title')}}</h1>
        <p class="lead">{{__('story.story')}}</p>
        <h4>{{__('story.moral')}}</h4>
    </div>
</body>
</html>