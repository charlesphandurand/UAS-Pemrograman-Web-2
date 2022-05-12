@extends('layouts.home')
@section('konten')
    <div class="container" style="margin-top: 70px; margin-bottom: 30px;">
        <div class="row text-center mb-3">
            <div class="col-sm-12">
                <h1>Genre: {{ $genre }}</h1>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                {{-- @foreach ($daftar_genre as $genre)
                    <ul>
                        <li><a href="#">{{ $genre->genre_name }}</a></li>
                    </ul>
                @endforeach --}}

                @foreach ($game as $game)
                    <ul>
                        <li><a href="#">{{ $game->game_name }}</a></li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
@endsection
