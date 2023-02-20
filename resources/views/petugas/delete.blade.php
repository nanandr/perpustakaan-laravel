<div class="modal fade shadow" id="deletePetugas{{ Auth::user()->idpetugas }}" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <strong class="text-center">Edit Data Petugas | {{ Auth::user()->namapetugas }}</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/petugas/delete/{{ Auth::user()->idpetugas }}">
                <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control mb-2" placeholder="Password.." required>
                        @if($errors->has('password'))
                            <div class="text-danger">
                                {{ $errors->first('password')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <input onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" type="submit" class="btn btn-danger px-5" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>