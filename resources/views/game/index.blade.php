<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sistem Informasi Games - Game Member</title>
</head>
<body>
    <h1>Game - Member</h1>
    <td><a class="btn btn-primary" href="{{ route('create-game') }}">Tambah Data</a></td>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Game</th>
            </tr>
            </thead>
            <tbody>
                @foreach ( $daftar_game as $game )
                    <tr>
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td>{{ $game->id_game }}</td>
                        <td>{{ $game->nama_game }}</td>
                        <td><a class="btn btn-primary" href="{{ route('edit-game', $game->id_game) }}">Edit</a>
                            <form action="{{ route('delete-game', $game->id_game) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau hapus?')">Delete</button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
    </table>
</body>
</html>