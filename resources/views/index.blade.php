@extends('component/app')
@section('nav')
    @extends('component/nav')
@endsection
@section('content')
    @include('component/banner')
    <nav class="navbar navbar-expand-lg nav-pills p-2">
        <a href="buku" class="nav nav-link">Data Buku</a>
        <a href="siswa" class="nav nav-link">Data Siswa</a>
        <a href="petugas" class="nav nav-link">Data Petugas</a>
        <div class="ml-auto">
                <form class="d-flex align-items-center flex-nowrap form-inline mt-4" action="/buku/search" method="GET">
                    <input name="keyword" type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <input type="submit" class="btn btn-primary px-3" value="Cari">
                </form>
        </div>
    </nav>
    <hr>
    <div class="p-3">
        <h1 class="pb-3">Buku Terbaru</h1>
        @foreach($data as $r)
            <div class="card mb-4 col-sm-7 p-2 bg-light shadow">
                <div class="pl-3 pt-2 row">
                    <h2>{{ $r->judul }}</h2>
                    <p class="pl-2 pt-3 text-secondary">{{ $r->kodebuku }}</p>
                </div>
                <hr>
                <p>Penerbit: {{ $r->penerbit }}</p>
                <p>Rilis: {{ date('d M Y', strtotime($r->created_at)) }}</p>
                <div class="row d-flex justify-content-between px-3">
                    <a href="/peminjaman" class="btn btn-outline-primary col-sm-8">Pinjam</a>
                    <button data-target="#editBuku{{ $r->idbuku }}" type="button" data-toggle="modal" class="btn btn-outline-success col-sm-2">Edit</button>
                    <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="/buku/delete/{{ $r->idbuku }}" class="btn btn-outline-danger col-sm-2">Delete</a>
                </div>
            </div>
            @include('buku/edit')
        @endforeach
    </div>
@endsection