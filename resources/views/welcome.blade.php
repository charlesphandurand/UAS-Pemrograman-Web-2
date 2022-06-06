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
                            @include('partials.content')
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <p class="text-center fs-3 fw-bold text-danger">There's no content for your results. 😔</p>
        @endif
        <div class="d-flex justify-content-end">{{ $daftar_game->links() }}</div>
    </div>
@endsection
