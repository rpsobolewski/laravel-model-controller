<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


</head>

<body>
    <h1>film dump</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
            Title {{ $movie->title }}<br>

        </li>
        @endforeach
    </ul>
</body>

</html>