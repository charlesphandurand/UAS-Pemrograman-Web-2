<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('favico.png') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sistem Informasi Games</title>
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center h-100 mb-5">
    <div class="row lebar-form">
        <div class="col">
    
    <main class="form-registration form-signin mb-5">
        <form method="post" action="{{ route('store-register') }}">
            @csrf
          {{-- <img class="mb-4" src="{{ asset('favico.png') }}" alt="" width="60" height="60"> --}}
          <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
          <div class="form-floating mb-3">
            <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
            <label for="name">Name</label>
            @error('name')
                <div class="invalid-feedback">
                    <small>{{ $message }}</small>
                </div>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control @error('username')is-invalid @enderror" name="username" id="username" placeholder="Username" value="{{ old('username') }}" required>
            <label for="username">Username</label>
            @error('username')
            <div class="invalid-feedback">
                <small>{{ $message }}</small>
            </div>
        @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">
                <small>{{ $message }}</small>
            </div>
        @enderror
        </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        </form>
        <small class="d-block text-center mt-3">Have an account? <a href="{{ route('index-login') }}">Login Now!</a></small>
      </main>
    </div>
</div>
</div>
</body>
</html>