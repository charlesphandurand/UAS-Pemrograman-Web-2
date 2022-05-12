<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('favico.png') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Games | {{ $title }}</title>
</head>

<body style="background-color: rgba(0, 0, 0, 0.466)">

    {{-- awal navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top fw-bold">
        <div class="container-fluid mx-3 text-decoration-none">
            <a href="{{ route('index-home') }}" class="navbar-brand me-4">
                <img src="{{ asset('favico.png') }}" alt="icon" height="30px" width="32px"><span
                    class="ps-2">Games</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr style="border: 1px solid white">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if (Request::segment(1) == '') active @endif" aria-current="page"
                            href="{{ route('index-home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::segment(1) == 'genre') active @endif" aria-current="page"
                            href="{{ route('genre') }}">Genre</a>
                    </li>
                    <li class="nav-item @if (Request::segment(1) == 'studio') active @endif">
                        <a class="nav-link" aria-current="page" href="#">Studio</a>
                    </li>
                    <li class="nav-item @if (Request::segment(1) == 'platform') active @endif">
                        <a class="nav-link" aria-current="page" href="#">Platform</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::segment(1) == 'about') active @endif" aria-current="page"
                            href="{{ route('about') }}">About</a>
                    </li>
                </ul>

                <div class="d-flex">
                    <a class="nav-item text-decoration-none text-white" aria-current="page"
                        href="{{ route('index-login') }}">Login</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- akhir navbar --}}

    @yield('konten')

    <!-- Footer -->
    <section class="footer p-5 bg-dark text-white" id="footer" name="footer"
        style="position: absolute; width:100%; left: 0;">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <p>&copy;2022 <a href="#" class="text-decoration-none"><b>Charles Phandurand - Maulana</b></a>
                    <p>Made with <i class="bi bi-heart-fill text-danger"></i> using <b>Laravel and Bootstrap</b></p>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
