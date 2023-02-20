@extends('component/app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card box-shadow bg-light p-2 mt-5 col-sm-5">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('img/smk1.png') }}" class="col-sm-10 img-responsive">
                </div>
                <div class="pl-2">
                    <h1 class="text-center pb">Perpustakaan</h1>
                    <h3 class="text-center pb-2">SMKN 1 Cimahi</h3>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            <b>Oops!</b> {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('registeraksi') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama Petugas</label>
                            <input type="text" name="namapetugas" class="form-control" placeholder="Nama Petugas..">
                            @if($errors->has('namapetugas'))
                                <div class="text-danger">
                                    {{ $errors->first('namapetugas')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email..">
                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>HP</label>
                            <input type="tel" name="hp" class="form-control" placeholder="Nomor HP..">
                            @if($errors->has('hp'))
                                <div class="text-danger">
                                    {{ $errors->first('hp')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password..">
                            @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-block col-sm-12 my-3">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection