<!-- awal sidebar  -->
<div class="wrapper">
    <nav id="sidebar" class="bg-dark text-light">
        <div class="d-flex flex-column flex-shrink-0 p-3">
            <a href="{{ route('index-home') }}"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <img src="{{ asset('favico.png') }}" alt="icon" height="32px" width="32px"><span
                    class="fs-4 ps-1">Games</span>
            </a>
            <hr>

            <p class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white fs-10">Welcome
                back, {{ auth()->user()->name }}</p>
            <hr>

            <ul class="nav nav-pills flex-column mb-auto">
                <li>
                    <a class="btn btn-secondary fs-9" href="{{ route('index-home') }}">
                        <i class="bi bi-house-door-fill pe-2" style="font-size: 15px"></i>Home</a>
                </li>
                <hr>
                <li>
                    <a href="{{ route('index-user') }}"
                        class="nav-link text-white @if (Request::segment(1) == 'user') active @endif">
                        <i class="bi bi-person-fill pe-3" width="16" height="16"></i>Users
                    </a>
                </li>
                <li>
                    <a href="{{ route('index-game') }}"
                        class="nav-link text-white @if (Request::segment(1) == 'game') active @endif">
                        <i class="bi bi-controller pe-3" width="16" height="16"></i>Games</a>
                </li>
                <li>
                    <a href="{{ route('index-genre') }}"
                        class="nav-link text-white @if (Request::segment(1) == 'genre_admin') active @endif">
                        <i class="bi bi-puzzle-fill pe-3" width="16" height="16"></i>Genre</a>
                </li>
                <li>
                    <a href="{{ route('index-studio') }}"
                        class="nav-link text-white @if (Request::segment(1) == 'studio_admin') active @endif">
                        <i class="bi bi-joystick pe-3" width="16" height="16"></i>Studio</a>
                </li>
                <li>
                    <a href="{{ route('index-platform') }}"
                        class="nav-link text-white @if (Request::segment(1) == 'platform_admin') active @endif">
                        <i class="bi bi-dpad-fill pe-3" width="16" height="16"></i>Platform</a>
                </li>
                <li>
                    <a href="{{ route('index-about') }}"
                        class="nav-link text-white @if (Request::segment(1) == 'about_admin') active @endif">
                        <i class="bi bi-info-circle-fill pe-3" width="16" height="16"></i>About
                    </a>
                </li>
            </ul>
            {{-- awal kondisi tombol session login --}}
            <hr>
            <ul class="list-unstyled CTAs mt-2">
                @auth
                    <li>
                        <form action="{{ route('post-logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are you sure want to log out?')"><i
                                    class="bi bi-power pe-2"></i>Log Out</button>
                        </form>
                    </li>
                @endauth
            </ul>
            {{-- akhir kondisi tombol session login --}}
    </nav>
</div>
<!-- akhir sidebar  -->
