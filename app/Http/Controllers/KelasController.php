<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    function index(){
        $data['kelass'] = Kelas::all();
        return view('dashboard.kelas.kelas.kelas',$data);
    }
    function add_form(){
        return view('dashboard.kelas.kelas.addKelas');
    }

    function save(Request $request){
        $request->validate([
            'kode' => 'required',
            'keterangan' => 'required'
        ],[
            'kode.required' => 'Kode Kelas wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi'
        ]);

        $data = [
            'kode_kelas'=>$request->kode,
            'keterangan'=>$request->keterangan,
            'status'=>$request->status
        ];

        try {
            //code...
            Kelas::create($data);
            return redirect()->route('kelas')->with('success','Kelas berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('kelas')->withErrors('Kelas gagal ditambahkan |'+$e->getMessage());
        }
    }
    function update(Request $request){

    }
    function delete(Request $request){

    }
}
