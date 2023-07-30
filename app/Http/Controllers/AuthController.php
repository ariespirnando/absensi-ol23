<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\AuthMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    function index(){
        return view('guest.auth.login');
    }

    function forgot(){
        return view('guest.auth.forgot');
    }

    function loginAction(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $credential = [
            'email' => $request->email,
            'password'=>$request->password,
            'status'=>'A'
        ];

        if(Auth::attempt($credential)){
            if(Auth::user()->role === 'siswa'){
                return redirect()->route('absensi');
            }else{
                return redirect()->route('dashboard');
            }
        }else{
            return redirect()->route('login')->withErrors('Email atau password salah');
        }
    }

    function forgotAction(Request $request){
        $details = [];
        Mail::to("achmad.ariespirnando@gmail.com")->send(new AuthMail($details));
        return redirect()->route('login')->with('success','Password berhasil direset, cek email anda untuk informasi lebih lanjut');
    }

    function logoutAction(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


}
