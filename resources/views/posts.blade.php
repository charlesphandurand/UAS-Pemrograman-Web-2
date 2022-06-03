@extends('layouts.home')
@section('konten')
    <div style="col-md-4 overflow: hidden; margin-top: 100px">
        <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->game_name }}" class="card-img-top">
    </div>
    <h1>{{ $game->game_name }}</h1>
    <small>Genre: <a href="{{ route('genre') }}">{{ $game->genre->genre_name }}</a></small>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, possimus beatae quo dolore incidunt ab libero
        praesentium numquam dolor, fuga, corrupti voluptate tenetur pariatur magni? Ducimus dicta cum ut neque.</p>
    <a href="{{ route('index-home') }}"><button class="btn btn-primary">
            Back</button></a>
@endsection
