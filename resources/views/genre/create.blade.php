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
                            <h3>Add Genre</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- awal modal form create --}}
                    <form method="post" action="{{ route('store-genre') }}" id="create" enctype="multipart/form-data">
                        @csrf
                        <label for="genre_name" class="form-label">Genre Name</label>
                        <input type="text" class="form-control @error('genre_name') is-invalid @enderror" name="genre_name"
                            id="genre_name" autofocus>
                        @error('genre_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mt-4 float-end">
                            <a class="btn btn-primary" href="{{ route('index-genre') }}">Cancel</a>
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
