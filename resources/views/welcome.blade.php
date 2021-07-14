<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @foreach ($movies as $movie)
        <div class="card">
            <h2>{{ $movie -> title }}</h2>
            <h3>{{ $movie -> original_title }}</h2>
            <h4>{{ $movie -> nationality }}</h2>
            <h4>{{ $movie -> date }}</h2>
            <h5>{{ $movie -> vote }}</h2>
        </div>
        @endforeach
    </div>
</body>
</html>