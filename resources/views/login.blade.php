@extends('component/app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card box-shadow bg-light p-2 mt-5 col-sm-5 shadow">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('img/smk1.png') }}" class="col-sm-8 img-responsive">
                </div>
                <div class="pl-2">
                    <h1 class="text-center pb">Perpustakaan</h1>
                    <h3 class="text-center pb-2">SMKN 1 Cimahi</h3>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            <b>Oops!</b> {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('loginaksi') }}" method="post">
                        @csrf
                            <input type="email" name="email" class="form-control mb-2" placeholder="Example@gmail.com" required="">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        <button type="submit" class="btn btn-primary btn-block col-sm-12 my-3">Log In</button>
                        <hr>
                        <p class="text-center">Belum punya akun? <a href="/register">Register</a> sekarang!</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection