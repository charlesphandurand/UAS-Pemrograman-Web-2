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
                            <h3>Data Studio</h3>
                        </div>
                        <div class="col-sm-4 d-flex flex-row-reverse bd-highlight">
                            <a class="btn btn-success" href="{{ route('create-studio') }}">
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
                                    <th>Studio Name</th>
                                    <th width="20%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftar_studio as $studio)
                                    <tr>
                                        <td class="fw-bold">{{ $studio->id }}</td>
                                        <td>{{ $studio->studio_name }}</td>
                                        <td><a class="btn btn-warning edit"
                                                href="{{ route('edit-studio', $studio->id) }}">
                                                <i class="bi bi-pencil-square"></i> Edit</a>
                                            <form action="{{ route('delete-studio', $studio->id) }}" method="post"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
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
