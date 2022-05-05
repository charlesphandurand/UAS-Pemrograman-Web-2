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
    <form method="post" action="{{ route('update-admin', $admin->id_admin) }}">
        @csrf
        @method('PUT')
      <label for="nama_admin" class="form-label">Nama Admin</label>
      <input type="text" class="form-control mb-3" name="nama_admin" id="nama_admin" value="{{ $admin->nama_admin }}">
      <label for="username_admin" class="form-label">Username Admin</label>
      <input type="text" class="form-control mb-3" name="username_admin" id="username_admin" value="{{ $admin->username_admin }}">
      <label for="password_admin" class="form-label">Password Admin</label>
      <input type="text" class="form-control mb-3" name="password_admin" id="password_admin" value="{{ $admin->password_admin }}">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a class="btn btn-primary" href="{{ route('browse-admin') }}">Batal</a>
    </div>
    </div>
</form>
</body>
</html>