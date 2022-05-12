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
                            <h3>Add User</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- awal modal form create --}}
                    <form method="post" action="{{ route('store-user') }}" id="create" enctype="multipart/form-data">
                        @csrf
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control mb-3" name="name" id="name">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control mb-3" name="username" id="username">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control mb-3" name="password" id="password">
                        <div class="mt-3 float-end">
                            <a class="btn btn-primary" href="{{ route('index-user') }}">Cancel</a>
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