@extends('component/app')
@section('nav')
    @extends('component/nav')
@endsection
@section('content')
    @include('component/banner')
    <hr>
    <div class="row pr-3 col-sm-12 ml-2">
        <a href="/peminjaman" class="text-dark"><h1>Data Peminjaman</h1></a>
    </div>
    <div class="px-4">
        <div class="row px-3">
            <button data-target="#tambahPinjam" type="button" data-toggle="modal" class="btn btn-outline-primary col-sm-9 mb-3">+ Pinjam Buku</button>
            <a href="peminjaman/returned" class="btn btn-outline-success col-sm-3 mb-3">Buku yang Sudah Dikembalikan</a>
        </div>
        <div class="table-responsive shadow mb-3">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-light">
                        <th>Judul Buku</th>
                        <th>Nama Peminjam</th>
                        <th>Nama Petugas</th>
                        <th>Tanggal Peminjaman</th>
                        <th class="col-sm-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $r)
                    <tr>
                        <td>{{ $r->buku->judul }}</td>
                        <td>{{ $r->siswa->namasiswa }}</td>
                        <td>{{ $r->petugas->namapetugas }}</td>
                        <td>{{ date('d M Y - H:m', strtotime($r->created_at)) }}</td>
                        <td class="col-sm-2 text-center"> 
                            <a onclick="return confirm('Kembalikan Peminjaman Buku ini?')" href="/peminjaman/delete/{{ $r->idpinjam }}" class="btn btn-outline-danger">Kembalikan</a>
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
    @include('peminjaman/tambah')
@endsection