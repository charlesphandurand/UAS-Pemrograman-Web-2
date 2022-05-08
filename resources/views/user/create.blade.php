<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sistem Informasi Games - Create</title>
</head>
<body>
    <h1>Create</h1>
    <div class="container">
        <div class="row">
    <form method="post" action="{{ route('store-user') }}">
        @csrf
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control mb-3" name="name" id="name">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control mb-3" name="username" id="username">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control mb-3" name="password" id="password">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a class="btn btn-primary" href="{{ route('index-user') }}">Cancel</a>
    </div>
    </div>
</form>
</body>
</html>