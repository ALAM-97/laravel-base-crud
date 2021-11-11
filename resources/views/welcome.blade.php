<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="text-center mt-5">
        <h1>Accedi al Back Office</h1>
        <a href="{{route('comics.index')}}"><button type="button" class="btn btn-primary mt-2">Enter</button></a>
    </div>
</body>
</html>
