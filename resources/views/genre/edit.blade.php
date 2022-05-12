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
                            <h3>Edit {{ $genre->genre_name }}</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- awal modal form edit --}}
                    <form method="post" action="{{ route('update-genre', $genre->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label for="genre_name" class="form-label">Game Name</label>
                        <input type="text" class="form-control mb-3" name="genre_name" id="genre_name"
                            value="{{ $genre->genre_name }}">
                        <div class="mt-3 float-end">
                            <a class="btn btn-primary" href="{{ route('index-genre') }}">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    {{-- akhir modal form edit --}}
                </div>
            </div>
        </div>
        {{-- akhir table --}}
    </div>
    </div>
    <!-- akhir konten -->
@endsection
