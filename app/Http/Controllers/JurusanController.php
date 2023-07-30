<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    function index(){
        $data['jurusans'] = Jurusan::all();
        return view('dashboard.kelas.jurusan.jurusan',$data);
    }
    function save(Request $request){
        $request->validate([
            'kodeJurusan' => 'required',
            'keterangan' => 'required'
        ],[
            'kodeJurusan.required' => 'Kode Jurusan wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi'
        ]);

        $data = [
            'kode_jurusan'=>$request->kodeJurusan,
            'keterangan'=>$request->keterangan,
            'status'=>$request->status
        ];

        try {
            //code...
            Jurusan::create($data);
            return redirect()->route('jurusan')->with('success','Jurusan berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('jurusan')->withErrors('Jurusan gagal ditambahkan |'+$e->getMessage());
        }

    }
    function update(Request $request){

    }
    function delete(Request $request){

    }
}
