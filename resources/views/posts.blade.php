@extends('layouts.home')
@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="margin-top: 80px"">{{ $game->game_name }}</h1>
                            <small>Genre: <a
                                    href=" {{ route('sub-genre', $game->genre->genre_name) }}"
                    class="text-decoration-none">
                    {{ $game->genre->genre_name }}</a> |
                    Studio: <a href="{{ route('sub-studio', $game->studio->studio_name) }}"
                        class="text-decoration-none">{{ $game->studio->studio_name }}</a> |
                    Platform: <a href="{{ route('sub-platform', $game->platform->platform_name) }}"
                        class="text-decoration-none">{{ $game->platform->platform_name }}</a></small>
                    <div class="col-md-12" style="overflow: hidden;">
                        <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->game_name }}"
                            class="img-fluid mt-3">
                    </div>
                    <p>{!! $game->game_description !!}</p>
                    <a href="{{ route('index-home') }}"><button class="btn btn-primary mb-4"><i
                                class="bi bi-arrow-left pe-2"></i>Back</button></a>
            </div>
        </div>
    </div>
@endsection
