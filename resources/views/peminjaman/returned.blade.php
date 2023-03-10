@extends('component/app')
@section('nav')
    @extends('component/nav')
@endsection
@section('content')
    @include('component/banner')
    <hr>
    <div class="row pr-3 col-sm-12 ml-2">
        <a href="/peminjaman/returned" class="text-dark"><h1>Data Pengembalian</h1></a>
    </div>
    <div class="px-4">
        <a href="{{ route('peminjaman') }}">Kembali</a>
        <div class="table-responsive shadow mt-2 mb-3">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-light">
                        <th>Judul Buku</th>
                        <th>Nama Peminjam</th>
                        <th>Nama Petugas</th>
                        <th>Tanggal Pengembalian</th>
                        <th class="col-sm-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $r)
                    <tr>
                        <td>{{ $r->buku->judul }}</td>
                        <td>{{ $r->siswa->namasiswa }}</td>
                        <td>{{ $r->petugas->namapetugas }}</td>
                        <td>{{ date('d M Y - H:i', strtotime($r->deleted_at)) }}</td>
                        <td class="col-sm-2 text-center"> 
                            <a onclick="return confirm('Hapus Peminjaman Buku ini?')" href="/peminjaman/delete/permanent/{{ $r->idpinjam }}" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <center class="text-secondary">Halaman {{ $data->currentPage() }}</center>
        <center class="text-secondary">Jumlah Siswa: {{ $data->total() }} </center>
        {{ $data->links() }}
    </div>
@endsection