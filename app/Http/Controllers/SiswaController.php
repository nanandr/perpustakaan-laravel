<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
use App\Models\Peminjaman;
use Carbon\Carbon;

class SiswaController extends Controller
{
    public function index(){
        $data = Siswa::paginate(10);
        return view('siswa/index', ['data' => $data]);
    }

    public function tambahaksi(Request $request){
        $this->validate($request,[
            'nis' => 'required',
            'namasiswa' => 'required',
            'kelas' => 'required',
            'hp' => 'required'
        ]);
        
        Siswa::create([
            'nis' => $request->nis,
            'namasiswa' => $request->namasiswa,
            'kelas' => $request->kelas,
            'hp' => $request->hp,
            'created_at' => Carbon::now()
        ]);
        
        return redirect('/siswa');
    }

    public function editaksi($id, Request $request){
        $this->validate($request,[
            'nis' => 'required',
            'namasiswa' => 'required',
            'kelas' => 'required',
            'hp' => 'required'
        ]);
        
        $Siswa = Siswa::find($id);
        $Siswa->nis = $request->nis;
        $Siswa->namasiswa = $request->namasiswa;
        $Siswa->kelas = $request->kelas;
        $Siswa->hp = $request->hp;
        $Siswa->updated_at = Carbon::now();
        $Siswa->save();
        
        return redirect('/siswa');
    }

    public function delete($id){
        $Peminjaman = Peminjaman::where('idsiswa',$id);
        $Peminjaman->forceDelete();
        
        if($Peminjaman->count() == 0){
            $Siswa = Siswa::find($id);
            $Siswa->delete();
        }

        return redirect('/siswa');
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $search = Siswa::where('namasiswa','like','%'.$keyword.'%')->paginate(10);
        return view('siswa/index',['data' => $search]);
    }
}
