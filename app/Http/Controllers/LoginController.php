<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect('home');
        }
        else{
            return view('login');
        }
    }
    public function loginaksi(Request $request){
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if(Auth::Attempt($data)){
            return redirect('home');
        }
        else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function register(){
        return view('register');
    }
    public function registeraksi(Request $request){
        $this->validate($request,[
            'namapetugas' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'password' => 'required'
        ]);
        if(Petugas::where('email',$request->email)->count() > 0){
            Session::flash('error', 'Email sudah digunakan');
            return redirect('register');
        }
        else{
            Petugas::create([
                'namapetugas' => $request->namapetugas,
                'email' => $request->email,
                'hp' => $request->hp,
                'password' => Hash::make($request->password)
            ]);
            $data = [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ];
            if(Auth::Attempt($data)){
                return redirect('home');
            }
        }        
    }
}
