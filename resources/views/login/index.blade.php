<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('favico.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sistem Informasi Games</title>
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center h-100 mb-5">
        <div class="row lebar-form">
            <div class="col">

                {{-- awal kondisi alert message --}}
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                {{-- akhir kondisi alert message --}}

                <main class="form-signin text-center mb-5">
                    <form method="POST" action="{{ route('post-login') }}">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal">Login</h1>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                name="username" id="username" placeholder="Username" value="{{ old('username') }}"
                                autofocus>
                            @error('username')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="password">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>
                    <small class="d-block text-center mt-3">Not Registered? <a
                            href="{{ route('index-register') }}">Register Now!</a></small>
                </main>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
</body>

</html>
