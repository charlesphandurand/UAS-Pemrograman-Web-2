@extends('layouts.home')
@section('konten')
    <div class="container" style="margin-top: 70px; margin-bottom: 30px;">
        <div class="row text-center mb-3">
            <div class="col-sm-12">
                <h1>Genre</h1>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row row-cols-2 row-cols-md-5 g-2 justify-content-center text-center">
                    @foreach ($daftar_genre as $genre)
                        <div class="col">
                            <a href="{{ route('sub-genre', $genre->genre_name) }}" class="text-decoration-none">
                            <div class="card" style=":hover: background-color">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $genre->genre_name }}</h5>
                                </div>
                            </div>
                        </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
