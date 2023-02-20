<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Siswa;

class HomeController extends Controller
{
    public function index(){
        $data = Buku::orderBy('created_at', 'DESC')->limit(5)->get();
        $databuku = Buku::all();
        $datasiswa = Siswa::all();
        return view('index', ['data' => $data , 'buku' => $databuku, 'siswa' => $datasiswa]);
    }
}
