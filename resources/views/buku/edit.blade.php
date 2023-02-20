<div class="modal fade shadow" id="editBuku{{$r->idbuku}}" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <strong class="text-center">Edit Data Buku | {{ $r->judul }}</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/buku/edit/aksi/{{ $r->idbuku }}">
                <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Judul Buku</label>
                        <div class="form-inline">
                            <input value="{{ $r->judul }}" type="text" name="judul" class="form-control col-sm-9" placeholder="Judul Buku..">
                            <input value="{{ $r->kodebuku }}" type="text" name="kodebuku" class="form-control col-sm-3" placeholder="Kode Buku..">
                        </div>
                        @if($errors->has('judul'))
                            <div class="text-danger">
                                {{ $errors->first('judul')}}
                            </div>
                        @endif
                        @if($errors->has('kodebuku'))
                            <div class="text-danger">
                                {{ $errors->first('kodebuku')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Pengarang</label>
                        <input value="{{ $r->pengarang }}" type="text" name="pengarang" class="form-control" placeholder="Pengarang..">
                        @if($errors->has('pengarang'))
                            <div class="text-danger">
                                {{ $errors->first('pengarang')}}
                            </div>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input value="{{ $r->penerbit }}" type="text" name="penerbit" class="form-control" placeholder="Pengarang..">
                        @if($errors->has('penerbit'))
                            <div class="text-danger">
                                {{ $errors->first('penerbit')}}
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