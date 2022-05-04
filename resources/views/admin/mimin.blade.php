<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sistem Informasi Games - Admin Member</title>
</head>
<body>
    <h1>Admin - Member</h1>
    <td><a class="btn btn-primary" href="{{ route('create-admin') }}">Tambah Data</a></td>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Nama</th>
            </tr>
            </thead>
            <tbody>
                @foreach ( $daftar_admin as $admin )
                    <tr>
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td>{{ $admin->nama_admin }}</td>
                        <td><a class="btn btn-primary" href="{{ route('edit-admin', $admin->id) }}">Edit</a>
                            <form action="{{ route('delete-admin', $admin->id) }}" method="post" style="display:inline;">
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