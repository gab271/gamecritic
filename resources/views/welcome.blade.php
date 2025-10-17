<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
    <link rel="stylesheet" href={{ asset('css/welcome.css') }}>
    <title>VideogamesCritic</title>
</head>

<body>
    <div>
        <h1>VIDEOGAMECRITIC</h1>
    </div>
    
    <div>
        <p class="expla">VideogameCritic is your hub for discovering great games, reading honest community reviews, and
            sharing your own playthrough insights.
            Browse the library to find titles by genre and platform, save your favorites, and track what you're
            currently playing or plan to try next.
             Finished a game or tested a demo? Publish a review with pros, cons, a score, and spoiler-safe notes to help
            others decide what to play.</p>
    </div>
    <div class="buttons-wrap">
        <a href="{{ route('videogames.create') }}" class="buttonmain">Review game</a>
        <a href="{{ route('videogames.index') }}" class="buttonmain">Library</a>
    </div>
</body>

</html>
