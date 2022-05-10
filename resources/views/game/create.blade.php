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
                        <input type="text" class="form-control mb-3" name="game_name" id="game_name">
                        <label for="genre_id" class="form-label">Genre ID</label>
                        <input type="text" class="form-control mb-3" name="genre_id" id="genre_id">
                        <label for="image" class="form-label">Upload Image</label>
                        <img class="img-preview img-fluid mb-3">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                            required onchange="previewImage()">
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
