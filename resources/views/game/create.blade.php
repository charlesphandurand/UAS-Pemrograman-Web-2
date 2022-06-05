@extends('layouts.main')
@section('konten')
    <!-- awal konten -->
    <div id="content">
        {{-- awal table --}}
        <div class="container">

            <div class="card">
                <div class="card-header bg-dark text-light">
                    <div class="row">
                        <div class="col-sm-4">
                            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                                <i class="bi bi-layout-text-sidebar-reverse"></i></button>
                        </div>
                        <div class="col-sm-4">
                            <h3>Add Games</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- awal modal form create --}}
                    <form method="post" action="{{ route('store-game') }}" id="create" enctype="multipart/form-data">
                        @csrf
                        <label for="game_name" class="form-label">Game Name</label>
                        <input type="text" class="form-control @error('game_name') is-invalid @enderror"
                            name="game_name" id="game_name" autofocus value="{{ old('game_name') }}">
                        @error('game_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="genre_id" class="form-label mt-3">Genre</label>
                        <select class="form-select mb-3" name="genre_id">
                            @foreach ($daftar_genre as $genre)
                                @if (old('genre_id') == $genre->id)
                                    <option value="{{ $genre->id }}" selected>{{ $genre->id }} -
                                        {{ $genre->genre_name }}
                                    </option>
                                @else
                                    <option value="{{ $genre->id }}">{{ $genre->id }} - {{ $genre->genre_name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        <label for="studio_id" class="form-label">Studio</label>
                        <select class="form-select mb-3" name="studio_id">
                            @foreach ($daftar_studio as $studio)
                                @if (old('studio_id') == $studio->id)
                                    <option value="{{ $studio->id }}" selected>{{ $studio->id }} -
                                        {{ $studio->studio_name }}</option>
                                @else
                                    <option value="{{ $studio->id }}">{{ $studio->id }} -
                                        {{ $studio->studio_name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        <label for="platform_id" class="form-label">Platform</label>
                        <select class="form-select mb-3" name="platform_id">
                            @foreach ($daftar_platform as $platform)
                                @if (old('platform_id') == $platform->id)
                                    <option value="{{ $platform->id }}" selected>{{ $platform->id }} -
                                        {{ $platform->platform_name }}</option>
                                @else
                                    <option value="{{ $platform->id }}">{{ $platform->id }} -
                                        {{ $platform->platform_name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <label for="image" class="form-label">Upload Image</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                            onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mt-3 float-end">
                            <a class="btn btn-primary" href="{{ route('index-game') }}">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    {{-- akhir modal form create --}}
                </div>
            </div>
        </div>
        {{-- akhir table --}}
    </div>
    </div>
    <!-- akhir konten -->
@endsection
