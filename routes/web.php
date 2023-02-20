<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'LoginController@login')->name('login');
Route::post('loginaksi', 'LoginController@loginaksi')->name('loginaksi');
Route::get('register', 'LoginController@register')->name('register');
Route::post('registeraksi', 'LoginController@registeraksi')->name('registeraksi');

Route::middleware('auth')->group(function(){
    Route::get('home', 'HomeControlleR@index')->name('home');
    Route::get('logout', 'LoginController@logout')->name('logout');

    Route::get('buku', 'BukuController@index')->name('buku');
    Route::post('buku/tambah/aksi', 'BukuController@tambahaksi');
    Route::put('buku/edit/aksi/{idbuku}', 'BukuController@editaksi');
    Route::get('buku/delete/{idbuku}', 'BukuController@delete');
    Route::get('buku/search', 'BukuController@search');

    Route::get('siswa', 'SiswaController@index')->name('siswa');
    Route::post('siswa/tambah/aksi', 'SiswaController@tambahaksi');
    Route::put('siswa/edit/aksi/{idsiswa}', 'SiswaController@editaksi');
    Route::get('siswa/delete/{idsiswa}', 'SiswaController@delete');
    Route::get('siswa/search', 'SiswaController@search');

    Route::get('petugas', 'PetugasController@index')->name('petugas');
    Route::post('petugas/tambah/aksi', 'PetugasController@tambahaksi');
    Route::put('petugas/edit/aksi/{idpetugas}', 'PetugasController@editaksi');
    Route::put('petugas/delete/{idpetugas}', 'PetugasController@delete');
    Route::get('petugas/search', 'PetugasController@search');

    Route::get('peminjaman', 'PeminjamanController@index')->name('peminjaman');
    Route::post('peminjaman/tambah/aksi', 'PeminjamanController@tambahaksi');
    Route::get('peminjaman/delete/{idpinjam}', 'PeminjamanController@delete');
    Route::get('peminjaman/delete/permanent/{idpinjam}', 'PeminjamanController@deletepermanent');
    Route::get('peminjaman/search', 'PeminjamanController@search');
    Route::get('peminjaman/returned', 'PeminjamanController@returned');
});

