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
            <div class="row">
                <div class="col-md-12">
                    <div class="row row-cols-1 row-cols-md-3 g-2 justify-content-center">
                        @foreach ($daftar_game as $game)
                            {{-- awal card --}}
                            <div class="col">
                                <div class="card mb-3" style="width: 100%;">
                                    <div class="row">
                                        <div style="col-md-12">
                                            <a class="text-decoration-none"
                                                href="{{ route('posts-game', $game->game_name) }}">
                                                <img src="{{ asset('storage/' . $game->image) }}"
                                                    alt="{{ $game->game_name }}" class="card-img-top gambar"></a>
                                        </div>
                                        <div class="col-md-8" style="width: 100%;">
                                            <div class="card-body">
                                                <h5 class="card-title"><a class="text-decoration-none"
                                                        href="{{ route('posts-game', $game->game_name) }}">{{ Illuminate\Support\Str::of($game->game_name)->words(1) }}</a>
                                                    {{-- href="{{ route('posts-game', $game->game_name) }}">{{ $game->game_name }}</a> --}}
                                                </h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Genre: <a
                                                        class="text-decoration-none"
                                                        href="{{ route('sub-genre', $game->genre->genre_name) }}">{{ $game->genre->genre_name }}</a>
                                                </h6>
                                                <p class="card-text">
                                                    {{-- <p>{!! $game->game_description !!}</p> --}}
                                                {!! Illuminate\Support\Str::of($game->game_description)->words(20) !!}
                                                </p>
                                                <p class="card-text"><small class="text-muted">Studio:
                                                        {{ $game->studio->studio_name }} | Platform:
                                                        {{ $game->platform->platform_name }}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- akhir card --}}
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <p class="text-center fs-3 fw-bold text-danger">There's no content for this genre. 😔</p>
        @endif
        <div class="d-flex justify-content-end">{{ $daftar_game->links() }}</div>
    </div>

@endsection
