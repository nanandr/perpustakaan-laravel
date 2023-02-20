<div class="modal fade shadow" id="tambahPetugas" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <strong class="text-center">Tambah Data Petugas</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/buku/tambah/aksi">
                <div class="modal-body">
                    {{ csrf_field() }}
                    @if (session('error'))
                        <div class="alert alert-danger">
                            <b>Oops!</b> {{ session('error') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label>Nama Petugas</label>
                        <input type="text" name="namapetugas" class="form-control" placeholder="Nama Petugas..">
                        @if($errors->has('namapetugas'))
                            <div class="text-danger">
                                {{ $errors->first('namapetugas')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email..">
                        @if($errors->has('email'))
                            <div class="text-danger">
                                {{ $errors->first('email')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>HP</label>
                        <input type="tel" name="hp" class="form-control" placeholder="Nomor HP..">
                        @if($errors->has('hp'))
                            <div class="text-danger">
                                {{ $errors->first('hp')}}
                            </div>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password..">
                        @if($errors->has('password'))
                            <div class="text-danger">
                                {{ $errors->first('password')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success px-5" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>