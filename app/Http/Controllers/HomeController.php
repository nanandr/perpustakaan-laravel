<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;

class HomeController extends Controller
{
    public function index(){
        $data = Buku::orderBy('created_at', 'DESC')->limit(5)->get();
        return view('index', ['data' => $data]);
    }
}
