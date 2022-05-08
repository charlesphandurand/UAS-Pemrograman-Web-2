{{-- awal modal form create --}}
<form method="post" action="{{ route('store-user') }}" id="create" enctype="multipart/form-data">
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-dark">Tambah User Baru</h4>
                    <button type="button" class="btn btn-danger close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    @csrf
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control mb-3" placeholder="Masukkan nama user" name="name" id="name" required>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control mb-3" placeholder="Masukkan username" name="username" id="username" required>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control mb-3" placeholder="Masukkan password" name="password" id="password" required>
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
