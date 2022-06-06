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
                            @include('partials.content')
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <p class="text-center fs-3 fw-bold text-danger">There's no content for this studio. 😔</p>
        @endif
    </div>
@endsection
