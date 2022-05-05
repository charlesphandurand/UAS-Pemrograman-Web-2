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
    <h1>Edit</h1>
    <div class="container">
        <div class="row">
    <form method="post" action="{{ route('update-game', $game->id_game) }}">
        @csrf
        @method('PUT')
      <label for="nama_game" class="form-label">Nama game</label>
      <input type="text" class="form-control mb-3" name="nama_game" id="nama_game" value="{{ $game->nama_game }}">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a class="btn btn-primary" href="{{ route('index-game') }}">Batal</a>
    </div>
    </div>
</form>
</body>
</html>