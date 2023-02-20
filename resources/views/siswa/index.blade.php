@extends('component/app')
@section('nav')
    @extends('component/nav')
@endsection
@section('content')
    @include('component/banner')
    <hr>
    <div class="row pr-3 col-sm-12 ml-2">
        <a href="/siswa" class="text-dark"><h1>Data Siswa</h1></a>
        <form class="d-flex justify-content-between form-inline ml-auto col-sm-8 pt-2" action="/siswa/search" method="GET">
            <input class="col-sm-10 form-control" type="search" name="keyword" placeholder="Cari Siswa.." value="{{ request('keyword') }}">
            <input class="col-sm-2 btn btn-primary" type="submit" value="Cari">
        </form>
    </div>
    <div class="px-4">
        <button data-target="#tambahSiswa" type="button" data-toggle="modal" class="btn btn-outline-primary col-sm-12 mb-3">+ Tambah Data Siswa</button>
        <div class="table-responsive shadow mb-3">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-light">
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>HP</th>
                        <th class="col-sm-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $r)
                    <tr>
                        <td class="col-sm-1">{{ $r->nis }}</td>
                        <td>{{ $r->namasiswa }}</td>
                        <td>{{ $r->kelas }}</td>
                        <td>{{ $r->hp }}</td>
                        <td class="col-sm-2 text-center"> 
                            <button data-target="#editSiswa{{ $r->idsiswa }}" type="button" data-toggle="modal" class="btn btn-outline-success">Edit</button>
                            <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="/siswa/delete/{{ $r->idsiswa }}" class="btn btn-outline-danger">Hapus</a>
                        </td>
                    </tr>
                    @include('siswa/edit')
                    @endforeach
                </tbody>
            </table>
        </div>
        <center class="text-secondary">Halaman {{ $data->currentPage() }}</center>
        <center class="text-secondary">Jumlah Siswa: {{ $data->total() }} </center>
        {{ $data->links() }}
    </div>
    @include('siswa/tambah')
@endsection