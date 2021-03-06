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
                            <h3>Data Genre</h3>
                        </div>
                        <div class="col-sm-4 d-flex flex-row-reverse bd-highlight">
                            <a class="btn btn-success" href="{{ route('create-genre') }}">
                                <i class="bi bi-plus-circle-fill" style="font-size: 15px"></i>
                                Tambah</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="10%">ID</th>
                                    <th>Genre Name</th>
                                    <th width="20%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftar_genre as $genre)
                                    <tr>
                                        <td class="fw-bold">{{ $genre->id }}</td>
                                        <td>{{ $genre->genre_name }}</td>
                                        <td><a class="btn btn-warning edit" href="{{ route('edit-genre', $genre->id) }}">
                                                <i class="bi bi-pencil-square"></i> Edit</a>
                                            <form action="{{ route('delete-genre', $genre->id) }}" method="post"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                {{-- <button type="submit" class="btn btn-danger delete">
                                                    <i class="bi bi-trash3-fill"></i> Delete</button> --}}
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Yakin mau hapus?')"><i
                                                        class="bi bi-trash3-fill"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- akhir table --}}
    </div>
    </div>
    <!-- akhir konten -->
@endsection
