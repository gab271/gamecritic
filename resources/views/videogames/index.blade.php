<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videogames</title>
</head>

<body>
    <h1>Listado de videojuegos</h1>
    <ul>
        @foreach ($videogames as $videogame)
            <li>{{ $videogame->title }}{{ $videogame->genre }}{{ $videogame->platform }}</li>
        @endforeach
    </ul>
</body>

</html>
