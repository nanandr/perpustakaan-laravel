<div class="modal fade shadow" id="tambahPinjam{{ $r->idbuku }}" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <strong class="text-center">Pinjam Buku</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/peminjaman/tambah/aksi">
                <div class="modal-body">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Judul Buku</label>
                        <select type="text" class="form-control" id="idbuku" name="idbuku">
                            <option></option>
                            @foreach($buku as $rbuku)
                                    @if ($rbuku->idbuku == $r->idbuku)
                                    <option value="{{ $rbuku->idbuku }}" selected>{{ $rbuku->judul }}</option>
                                    @else
                                    <option value="{{ $rbuku->idbuku }}">{{ $rbuku->judul }}</option>
                                    @endif
                                
                            @endforeach
                        </select>
                        @if($errors->has('idbuku'))
                            <div class="text-danger">
                                {{ $errors->first('idbuku')}}
                            </div>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <select type="text" class="form-control" id="idsiswa" name="idsiswa">
                            <option></option>
                            @foreach($siswa as $rsiswa)
                                <option value="{{ $rsiswa->idsiswa }}">{{ $rsiswa->namasiswa }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('idsiswa'))
                            <div class="text-danger">
                                {{ $errors->first('idsiswa')}}
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