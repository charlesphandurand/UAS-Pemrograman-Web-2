@extends('layouts.home')
@section('konten')
    <div class="container" style="margin-top: 70px; margin-bottom: 30px;">
        <div class="row text-center mb-3">
            <div class="col-sm-12">
                <h1>Studio: {{ $studio }}</h1>
                <hr>
            </div>
        </div>

        @if ($game->count())
            <div class="row">
                <div class="col-md-12">
                    <div class="row row-cols-1 row-cols-md-3 g-2 justify-content-center">
                        @foreach ($game as $game)
                            {{-- awal card --}}
                            <div class="col">
                                <div class="card mb-3" style="width: 100%;">
                                    <div class="row">
                                        <div style="col-md-12">
                                            <img src="{{ asset('storage/' . $game->image) }}"
                                                alt="{{ $game->game_name }}" class="card-img-top">
                                        </div>
                                        <div class="col-md-8" style="width: 100%;">
                                            <div class="card-body">
                                                <h5 class="card-title"><a class="text-decoration-none"
                                                        href="{{ route('posts-game', $game->game_name) }}">{{ $game->game_name }}</a>
                                                </h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Studio: <a
                                                        class="text-decoration-none"
                                                        href="{{ route('sub-studio', $game->studio->studio_name) }}">{{ $game->studio->studio_name }}</a>
                                                </h6>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil
                                                    asperiores
                                                    commodi, rem fugiat necessitatibus qui ab repellendus impedit tempora
                                                    voluptatum?
                                                </p>
                                                <p class="card-text"><small class="text-muted">Studio:
                                                        {{ $game->studio->studio_name }} | Studio:
                                                        {{ $game->studio->studio_name }}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- akhir card --}}
                        @endforeach
                        {{-- <div class="d-flex justify-content-end">{{ $game->links() }}</div> --}}
                    </div>
                </div>
            </div>
        @else
            <p class="text-center fs-3 fw-bold text-danger">There's no content for this studio. 😔</p>
        @endif
    </div>
@endsection
