<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class PeminjamanController extends Controller
{
    public function index(){
        $data = Peminjaman::orderBy('created_at', 'DESC')->paginate(10);
        $databuku = Buku::all();
        $datasiswa = Siswa::all();
        return view('peminjaman/index', ['data' => $data , 'buku' => $databuku, 'siswa' => $datasiswa]);
    }

    public function tambahaksi(Request $request){
        $this->validate($request,[
            'idbuku' => 'required',
            'idsiswa' => 'required'
        ]);
        
        Peminjaman::create([
            'idbuku' => $request->idbuku,
            'idpetugas' => Auth::user()->idpetugas,
            'idsiswa' => $request->idsiswa,
            'created_at' => Carbon::now('Asia/Jakarta')
        ]);
        
        return redirect('/peminjaman');
    }

    public function delete($id){
        $data = Peminjaman::find($id);
        $data->delete();

        return redirect('/peminjaman');
    }

    public function returned(){
        $data = Peminjaman::onlyTrashed()->orderBy('deleted_at', 'DESC')->paginate(10);
        return view('peminjaman/returned', ['data' => $data]);
    }

    public function deletepermanent($id){
        $data = Peminjaman::onlyTrashed()->where('idpinjam',$id);
        $data->forceDelete();
        
        return redirect('/peminjaman/returned');
    }
}
