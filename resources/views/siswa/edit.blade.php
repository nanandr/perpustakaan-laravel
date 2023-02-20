<div class="modal fade shadow" id="editSiswa{{$r->idsiswa}}" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <strong class="text-center">Edit Data Siswa | {{ $r->namasiswa }}</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/siswa/edit/aksi/{{ $r->idsiswa }}">
                <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Nama siswa</label>
                        <div class="form-inline">
                            <input value="{{ $r->namasiswa }}" type="text" name="namasiswa" class="form-control col-sm-7" placeholder="Nama Siswa..">
                            <input value="{{ $r->nis }}" type="text" name="nis" class="form-control col-sm-5" placeholder="NIS">
                        </div>
                        @if($errors->has('nis'))
                            <div class="text-danger">
                                {{ $errors->first('nis')}}
                            </div>
                        @endif
                        @if($errors->has('namasiswa'))
                            <div class="text-danger">
                                {{ $errors->first('namasiswa')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Kelas</label>
                        <input value="{{ $r->kelas }}" type="text" name="kelas" class="form-control" placeholder="Kelas..">
                        @if($errors->has('kelas'))
                            <div class="text-danger">
                                {{ $errors->first('kelas')}}
                            </div>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label>HP</label>
                        <input value="{{ $r->hp }}" type="tel" name="hp" class="form-control" placeholder="Nomor HP..">
                        @if($errors->has('hp'))
                            <div class="text-danger">
                                {{ $errors->first('hp')}}
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