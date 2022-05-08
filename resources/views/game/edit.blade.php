<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sistem Informasi Games - Edit</title>
</head>
<body>
    <h1>Edit {{ $game->genre->genre_name }}</h1>
    <div class="container">
        <div class="row">
    <form method="post" action="{{ route('update-game', $game->id) }}">
        @csrf
        @method('PUT')
      <label for="game_name" class="form-label">Game Name</label>
      <input type="text" class="form-control mb-3" name="game_name" id="game_name" value="{{ $game->game_name }}">
      <label for="genre_id" class="form-label">Genre ID</label>
      <input type="text" class="form-control mb-3" name="genre_id" id="genre_id" value="{{ $game->genre_id }}">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a class="btn btn-primary" href="{{ route('index-game') }}">Batal</a>
    </div>
    </div>
</form>
</body>
</html>