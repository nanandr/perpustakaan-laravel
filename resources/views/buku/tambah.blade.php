<div class="modal fade shadow" id="tambahBuku" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <strong class="text-center">Tambah Data Buku</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/buku/tambah/aksi">
                <div class="modal-body">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Judul Buku</label>
                        <div class="form-inline">
                            <input type="text" name="judul" class="form-control col-sm-9" placeholder="Judul Buku..">
                            <input type="text" name="kodebuku" class="form-control col-sm-3" placeholder="Kode Buku..">
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
                        <input type="text" name="pengarang" class="form-control" placeholder="Pengarang..">
                        @if($errors->has('pengarang'))
                            <div class="text-danger">
                                {{ $errors->first('pengarang')}}
                            </div>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" placeholder="Pengarang..">
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