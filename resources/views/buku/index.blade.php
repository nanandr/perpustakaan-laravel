@extends('component/app')
@section('nav')
    @extends('component/nav')
@endsection
@section('content')
    @include('component/banner')
    <hr>
    <div class="row pr-3 col-sm-12 ml-2">
        <a href="/buku" class="text-dark"><h1>Data Buku</h1></a>
        <form class="d-flex justify-content-between form-inline ml-auto col-sm-8 pt-2" action="/buku/search" method="GET">
            <input class="col-sm-10 form-control" type="search" name="keyword" placeholder="Cari Buku.." value="{{ request('keyword') }}">
            <input class="col-sm-2 btn btn-primary" type="submit" value="Cari">
        </form>
    </div>
    <div class="px-4">
        <button data-target="#tambahBuku" type="button" data-toggle="modal" class="btn btn-outline-primary col-sm-12 mb-3">+ Tambah Data Buku</button>
        <div class="table-responsive shadow mb-3">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-light">
                        <th class="col-sm-1">Kode</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Rilis</th>
                        <th class="col-sm-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $r)
                    <tr>
                        <td class="col-sm-1">{{ $r->kodebuku }}</td>
                        <td>{{ $r->judul }}</td>
                        <td>{{ $r->pengarang }}</td>
                        <td>{{ $r->penerbit }}</td>
                        <td>{{ date('d M Y', strtotime($r->created_at)) }}</td>
                        <td class="col-sm-2 text-center"> 
                            <button data-target="#editBuku{{ $r->idbuku }}" type="button" data-toggle="modal" class="btn btn-outline-success">Edit</button>
                            <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="/buku/delete/{{ $r->idbuku }}" class="btn btn-outline-danger">Hapus</a>
                        </td>
                    </tr>
                    @include('buku/edit')
                    @endforeach
                </tbody>
            </table>
        </div>
        <center class="text-secondary">Halaman {{ $data->currentPage() }}</center>
        <center class="text-secondary">Jumlah Buku: {{ $data->total() }} </center>
        {{ $data->links() }}
    </div>
    @include('buku/tambah')
@endsection