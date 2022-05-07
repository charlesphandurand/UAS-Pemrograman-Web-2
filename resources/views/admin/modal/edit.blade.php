{{-- awal modal form edit --}}
<form method="post" action="{{ route('update-admin', $admin->id_admin) }}" id="edit" enctype="multipart/form-data">
    <div class="modal fade text-left" id="ModalEdit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-dark">Edit Admin Ke-{{ $admin->id_admin }}</h4>
                    <button type="button" class="btn btn-danger close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    @csrf
                    @method('PUT')
                    <label for="nama_admin" class="form-label">Nama Admin</label>
                    <input type="text" class="form-control mb-3" name="nama_admin" id="nama_admin" value="{{ $admin->nama_admin }}" required>
                    <label for="username_admin" class="form-label">Username Admin</label>
                    <input type="text" class="form-control mb-3" name="username_admin" id="username_admin" value="{{ $admin->username_admin }}" required>
                    <label for="password_admin" class="form-label">Password Admin</label>
                    <input type="text" class="form-control mb-3" name="password_admin" id="password_admin" value="{{ $admin->password_admin }}" required>
                    <div class="modal-footer">
                        <a class="btn btn-secondary close" data-dismiss="modal" aria-label="Close" aria-hidden="true">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- akhir modal form edit --}}
