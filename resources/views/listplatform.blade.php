@extends('layouts.home')
@section('konten')
    <div class="container" style="margin-top: 70px; margin-bottom: 30px;">
        <div class="row text-center mb-3">
            <div class="col-sm-12">
                <h1>Platform</h1>
                <hr>
            </div>
        </div>

        @if ($daftar_platform->count())
            <div class="row">
                <div class="col-md-12">
                    <div class="row row-cols-2 row-cols-md-5 g-2 justify-content-center text-center">
                        @foreach ($daftar_platform as $platform)
                            <div class="col">
                                <a href="{{ route('sub-platform', $platform->platform_name) }}"
                                    class="text-decoration-none">
                                    <div class="card sentuh">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $platform->platform_name }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <p class="text-center fs-3 fw-bold text-danger">There's no platform yet. 😔</p>
        @endif
    </div>
@endsection
