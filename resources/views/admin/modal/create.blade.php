{{-- awal modal form create --}}
<form method="post" action="{{ route('store-admin') }}" id="create" enctype="multipart/form-data">
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-dark">Tambah Admin Baru</h4>
                    <button type="button" class="btn btn-danger close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    @csrf
                    <label for="nama_admin" class="form-label">Nama Admin</label>
                    <input type="text" class="form-control mb-3" placeholder="Masukkan nama admin" name="nama_admin" id="nama_admin" required>
                    <label for="username_admin" class="form-label">Username Admin</label>
                    <input type="text" class="form-control mb-3" placeholder="Masukkan username" name="username_admin" id="username_admin" required>
                    <label for="password_admin" class="form-label">Password Admin</label>
                    <input type="password" class="form-control mb-3" placeholder="Masukkan password" name="password_admin" id="password_admin" required>
                    <div class="modal-footer">
                        <a class="btn btn-secondary close" data-dismiss="modal" aria-label="Close" aria-hidden="true">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- akhir modal form create --}}
