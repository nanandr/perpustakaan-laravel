<div class="bg-light sticky-top">
    <nav class="navbar navbar-expand-lg nav-pills p-2 container">
        <a href="{{ route('home') }}" class="nav nav-link {{ (request()->is('home')) ? 'active' : ''}} mr-2">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <a class="btn btn-outline-secondary"><img src="{{asset('img/menu.png')}}" alt="menu" width="24px"></a>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="" class="btn text-primary dropdown-toggle mr-2 col-sm-12" data-toggle="dropdown">Data</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('buku') }}" class="dropdown-item {{ (request()->is('buku')) ? 'active' : ''}}">Buku</a>
                        <a href="{{ route('siswa') }}" class="dropdown-item {{ (request()->is('siswa')) ? 'active' : ''}}">Siswa</a>
                        <a href="{{ route('petugas') }}" class="dropdown-item {{ (request()->is('petugas')) ? 'active' : ''}}">Petugas</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <a href="{{ route('peminjaman') }}" class="btn btn-outline-primary px-5 mr-1 col-sm-12 {{ (request()->is('peminjaman')) ? 'active' : ''}}">
                        Pinjam Buku
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="btn text-primary dropdown-toggle mr-2 col-sm-12" data-toggle="dropdown">{{Auth::user()->namapetugas}}</a>
                    <div class="dropdown-menu">
                        <button data-target="#editPetugas{{ Auth::user()->idpetugas }}" type="button" data-toggle="modal" class="dropdown-item">Edit Profile</button>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="return confirm('Apakah anda yakin akan logout?')">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
@include('petugas/edit')