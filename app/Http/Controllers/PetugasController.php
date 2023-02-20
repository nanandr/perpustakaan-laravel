<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Petugas;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class PetugasController extends Controller
{
    public function index(){
        $data = Petugas::paginate(10);
        return view('petugas/index', ['data' => $data]);
    }

    public function tambah(){
        return view('petugas/tambah');
    }
    public function tambahaksi(Request $request){
        $this->validate($request,[
            'namapetugas' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'password' => 'required'
        ]);

        if(Petugas::where('email',$request->email)->count() > 0){
            Session::flash('error', 'Email sudah digunakan');
            return redirect('petugas/tambah');
        }
        else{
            Petugas::create([
                'namapetugas' => $request->namapetugas,
                'email' => $request->email,
                'hp' => $request->hp,
                'password' => Hash::make($request->password)
            ]);
        }
        
        return redirect('/petugas');
    }

    public function edit($id){
        $data = Petugas::find($id);
        return view('petugas/edit', ['data' => $data]);
    }
    public function editaksi($id, Request $request){
        $this->validate($request,[
            'namapetugas' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'oldpassword' => 'required'
        ]);
        $data = [
            'idpetugas' => $id,
            'password' => $request->oldpassword
        ];

        if(Auth::Attempt($data)){
            $Petugas = Petugas::find($id);
            $Petugas->namapetugas = $request->namapetugas;
            $Petugas->email = $request->email;
            $Petugas->hp = $request->hp;

            if($request->filled('newpassword')){
                $Petugas->password = Hash::make($request->newpassword);
                $Petugas->save();
                Auth::logout();
                Session::flash('success', 'Password berhasil diubah');
                return redirect('/');
            }
            else{
                $Petugas->save();
                return redirect('/petugas');
            }
        }
        else{
            Session::flash('error', 'Password Salah');
            return redirect('/petugas/edit/'.$id);
        }
    }

    public function delete($id, Request $request){
        $this->validate($request,[
            'password' => 'required'
        ]);
        $data = [
            'idpetugas' => $id,
            'password' => $request->password
        ];
        if(Auth::attempt($data)){
            $Petugas = Petugas::find($id);
            $Petugas->delete();
            Auth::logout();
            Session::flash('success', 'Akun telah dihapus');    
            return redirect('/');
        }
        else{
            Session::flash('error', 'Gagal, Salah Password');
            return redirect('petugas');
        }
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $search = Petugas::where('namapetugas','like','%'.$keyword.'%')->paginate(10);
        return view('petugas/index',['data' => $search]);
    }
}
