@extends('layouts.home')
@section('konten')
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-md-center my-5">
            <div class="col-md-5">
                <form class="d-flex" action="{{ route('index-home') }}" method="get">
                    <input class="form-control me-2" type="search" placeholder="Search" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>

        @if ($daftar_game->count())
            <div class="row justify-content-md-center mb-5">

                {{-- awal perulangan grid system pada card --}}
                <?php $numOfCols = 3; $rowCount = 0; $bootstrapColWidth = 12 / $numOfCols; 
                foreach ($daftar_game as $game){ if($rowCount % $numOfCols == 0) { ?>
                <div class="row"> <?php } $rowCount++; ?>
                    <div class="col-md-<?php echo $bootstrapColWidth; ?>">
                        {{-- awal card --}}
                        <div class="card mb-3" style="width: 105%;">
                            <div class="row g-0">
                                <div style="col-md-12">
                                    <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->game_name }}"
                                        class="card-img-top">
                                </div>
                                <div class="col-md-8" style="width: 105%;">
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="text-decoration-none"
                                                href="{{ route('posts-game', $game->game_name) }}">{{ $game->game_name }}</a>
                                        </h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Genre: <a class="text-decoration-none"
                                                href="{{ route('sub-genre', $game->genre->genre_name) }}">{{ $game->genre->genre_name }}</a>
                                        </h6>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil asperiores
                                            commodi, rem fugiat necessitatibus qui ab repellendus impedit tempora
                                            voluptatum?
                                        </p>
                                        <p class="card-text"><small class="text-muted">Studio:
                                                {{ $game->studio->studio_name }} | Platform:
                                                {{ $game->platform->platform_name }}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- akhir card --}}
                    </div>
                    <?php if($rowCount % $numOfCols == 0) { ?>
                </div> <?php } } ?>
                {{-- akhir perulangan grid system pada card --}}
            @else
                <p class="text-center fs-3 fw-bold text-danger">Sorry, no results found. 😔</p>
        @endif
        <div class="d-flex justify-content-end">{{ $daftar_game->links() }}</div>
    </div>
    </div>
@endsection
