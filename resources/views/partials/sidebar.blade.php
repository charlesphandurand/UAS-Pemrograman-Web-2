    <!-- awal sidebar  -->
    <div class="wrapper">
        <nav id="sidebar" class="bg-dark text-light">
            <div class="d-flex flex-column flex-shrink-0 p-3">
                <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img src="{{ asset('favico.png') }}" alt="icon" height="32px" width="32px"><span
                        class="fs-4 ps-1">Games</span>
                </a>
                <hr>

                {{-- awal kondisi welcome session login --}}
                @auth
                    <p class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white fs-10">Welcome back,
                        {{ auth()->user()->name }}</p>
                    <hr>
                @else
                    <p class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white fs-10">Welcome Guest</p>
                    <hr>
                @endauth
                {{-- akhir kondisi welcome session login --}}

                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ route('index-home') }}" class="nav-link text-white @if (Request::segment(1) == 'home') active @endif"
                            aria-current="page">
                            <i class="bi bi-house-door-fill pe-3" width="16" height="16"></i>Home</a>
                    </li>
                    <li>
                        <a href="{{ route('index-game') }}" class="nav-link text-white @if (Request::segment(1) == 'game') active @endif">
                            <i class="bi bi-joystick pe-3" width="16" height="16"></i>Games</a>
                    </li>
                    <li>
                        <a href="{{ route('index-user') }}"
                            class="nav-link text-white @if (Request::segment(1) == 'user') active @endif">
                            <i class="bi bi-person-fill pe-3" width="16" height="16"></i>Users
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('index-about') }}"
                            class="nav-link text-white @if (Request::segment(1) == 'about') active @endif">
                            <i class="bi bi-info-circle-fill pe-3" width="16" height="16"></i>About
                        </a>
                    </li>
                </ul>
                {{-- awal kondisi tombol session login --}}
                <ul class="list-unstyled CTAs mt-2">
                    @auth

                        <li>
                            <form action="{{ route('post-logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Log Out</button>
                            </form>
                        </li>
                    @else
                        <li>
                            <a class="btn btn-primary fs-9" href="{{ route('index-login') }}">
                                <i class="bi bi-box-arrow-in-right" style="font-size: 15px"></i> Login</a>
                        </li>

                    @endauth
                </ul>
                {{-- akhir kondisi tombol session login --}}
        </nav>
    </div>
    <!-- akhir sidebar  -->
