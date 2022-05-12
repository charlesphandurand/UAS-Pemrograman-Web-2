<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sistem Informasi Games</title>
</head>
<body>
    <div style="col-md-4 overflow: hidden;">
        <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->game_name }}"
            class="card-img-top">
    </div>
    <h1>{{ $game->game_name }}</h1>
    <small>Genre: <a href="{{ route('genre') }}">{{ $game->genre->genre_name }}</a></small>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, possimus beatae quo dolore incidunt ab libero praesentium numquam dolor, fuga, corrupti voluptate tenetur pariatur magni? Ducimus dicta cum ut neque.</p>
    <a href="{{ route('index-home') }}"><button class="btn btn-primary">
        Back</button></a>
</body>
</html>