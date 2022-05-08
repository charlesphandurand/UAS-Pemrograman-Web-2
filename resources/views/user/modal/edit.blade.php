{{-- awal modal form edit --}}
<form method="post" action="{{ route('update-user', $user->id) }}" id="edit" enctype="multipart/form-data">
    <div class="modal fade text-left" id="ModalEdit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-dark">Edit User Ke-{{ $user->id }}</h4>
                    <button type="button" class="btn btn-danger close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    @csrf
                    @method('PUT')
                    <label for="name" class="form-label">Name User</label>
                    <input type="text" class="form-control mb-3" name="name" id="name" value="{{ $user->name }}" required>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control mb-3" name="username" id="username" value="{{ $user->username }}" required>
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control mb-3" name="password" id="password" value="{{ $user->password }}" required>
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
