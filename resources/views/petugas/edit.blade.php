<div class="modal fade shadow" id="editPetugas{{ Auth::user()->idpetugas }}" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <strong class="text-center">Edit Data Petugas | {{ Auth::user()->namapetugas }}</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/petugas/edit/aksi/{{ Auth::user()->idpetugas }}">
                <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    @if (session('error'))
                        <div class="alert alert-danger">
                            <b>Oops!</b> {{ session('error') }}
                        </div>
                    @endif
                    
                    <div class="form-group">
                        <label>Nama Petugas</label>
                        <input value="{{ Auth::user()->namapetugas }}" type="text" name="namapetugas" class="form-control" placeholder="Nama Petugas..">
                        @if($errors->has('namapetugas'))
                            <div class="text-danger">
                                {{ $errors->first('namapetugas')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input value="{{ Auth::user()->email }}" type="email" name="email" class="form-control" placeholder="Email..">
                        @if($errors->has('email'))
                            <div class="text-danger">
                                {{ $errors->first('email')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>HP</label>
                        <input value="{{ Auth::user()->hp }}" type="tel" name="hp" class="form-control" placeholder="Nomor HP..">
                        @if($errors->has('hp'))
                            <div class="text-danger">
                                {{ $errors->first('hp')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="oldpassword" class="form-control mb-2" placeholder="Password.." required>
                        <input type="password" name="newpassword" class="form-control" placeholder="New Password.. (Optional)">
                        @if($errors->has('oldpassword'))
                            <div class="text-danger">
                                {{ $errors->first('oldpassword')}}
                            </div>
                        @endif
                        @if($errors->has('newpassword'))
                            <div class="text-danger">
                                {{ $errors->first('newpassword')}}
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