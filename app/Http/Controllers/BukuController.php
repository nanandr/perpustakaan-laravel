<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;
use Carbon\Carbon;

class BukuController extends Controller
{
    public function index(){
        $data = Buku::paginate(10);
        return view('buku/index', ['data' => $data]);
    }

    public function tambahaksi(Request $request){
        $this->validate($request,[
            'judul' => 'required',
            'kodebuku' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required'
        ]);
        
        Buku::create([
            'judul' => $request->judul,
            'kodebuku' => $request->kodebuku,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'created_at' => Carbon::now()
        ]);
        
        return redirect('/buku');
    }

    public function editaksi($id, Request $request){
        $this->validate($request,[
            'judul' => 'required',
            'kodebuku' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required'
        ]);
        
        $Buku = Buku::find($id);
        $Buku->judul = $request->judul;
        $Buku->kodebuku = $request->kodebuku;
        $Buku->pengarang = $request->pengarang;
        $Buku->penerbit = $request->penerbit;
        $Buku->updated_at = Carbon::now();
        $Buku->save();
        
        return redirect('/buku');
    }

    public function delete($id){
        $Buku = Buku::find($id);
        $Buku->delete();

        return redirect('/buku');
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $search = Buku::where('judul','like','%'.$keyword.'%')->paginate(10);
        return view('buku/index',['data' => $search]);
    }
}
