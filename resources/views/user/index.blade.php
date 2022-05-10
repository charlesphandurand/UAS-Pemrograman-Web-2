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
                            <h3>Data Users</h3>
                        </div>
                        <div class="col-sm-4 d-flex flex-row-reverse bd-highlight">
                            {{-- <a class="btn btn-success" href="{{ route('create-user') }}"> --}}
                            <a class="btn btn-success" href="#" data-toggle="modal" data-target="#ModalCreate">
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
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th width="20%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftar_user as $user)
                                    <tr>
                                        <td scope="row">{{ $loop->index + 1 }}</td>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->password }}</td>
                                        {{-- <td><a class="btn btn-warning edit" href="{{ route('edit-user', $user->id) }}"><i
                                                    class="bi bi-pencil-square"></i> Edit</a> --}}
                                        <td><a class="btn btn-warning edit" href="#" data-toggle="modal"
                                                data-target="#ModalEdit"><i class="bi bi-pencil-square"></i> Edit</a>
                                            <form action="{{ route('delete-user', $user->id) }}" method="post"
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

    {{-- awal include modal --}}
    @include('user.modal.create')
    @include('user.modal.edit')
    {{-- akhir include modal --}}
@endsection
