@extends('layouts.home')
@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="col-md-12 overflow: hidden; margin-top: 100px">
                    <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->game_name }}"
                        class="card-img-top">
                </div>
                <h1>{{ $game->game_name }}</h1>
                <small>Genre: <a
                        href="{{ route('sub-genre', $game->genre->genre_name) }}" class="text-decoration-none">{{ $game->genre->genre_name }}</a></small>
                <p>{!! $game->game_description !!}</p>
                <a href="{{ route('index-home') }}"><button class="btn btn-primary"><i
                            class="bi bi-arrow-left pe-2"></i>Back</button></a>
            </div>
        </div>
    </div>
@endsection
