@extends('component/app')
@section('nav')
    @extends('component/nav')
@endsection
@section('content')
    @include('component/banner')
    <hr>
    <div class="row pr-3 col-sm-12 ml-2">
        <a href="/petugas" class="text-dark"><h1>Data Petugas</h1></a>
        <form class="d-flex justify-content-between form-inline ml-auto col-sm-8 pt-2" action="/petugas/search" method="GET">
            <input class="col-sm-10 form-control" type="search" name="keyword" placeholder="Cari Petugas.." value="{{ request('keyword') }}">
            <input class="col-sm-2 btn btn-primary" type="submit" value="Cari">
        </form>
    </div>
    <div class="px-4">
        <button data-target="#tambahPetugas" type="button" data-toggle="modal" class="btn btn-outline-primary col-sm-12 mb-3">+ Tambah Data Petugas</button>
        <div class="table-responsive shadow mb-3">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-light">
                        <th>Nama</th>
                        <th>Email</th>
                        <th>HP</th>
                        <th class="col-sm-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $r)
                    <tr>
                        <td>{{ $r->namapetugas }}</td>
                        <td>{{ $r->email }}</td>
                        <td>{{ $r->hp }}</td>
                        @if($r->email == Auth::user()->email)
                            <td class="col-sm-2 text-center">
                                <button data-target="#editPetugas{{ $r->idpetugas }}" type="button" data-toggle="modal" class="btn btn-outline-success">Edit</button>
                                <button data-target="#deletePetugas{{ $r->idpetugas }}" type="button" data-toggle="modal" class="btn btn-outline-danger">Hapus</a>
                            </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <center class="text-secondary">Halaman {{ $data->currentPage() }}</center>
        <center class="text-secondary">Jumlah Petugas: {{ $data->total() }} </center>
        {{ $data->links() }}
    </div>
    @include('petugas/tambah')
    @include('petugas/edit')
    @include('petugas/delete')
@endsection