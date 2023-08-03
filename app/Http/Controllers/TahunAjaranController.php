<?php

namespace App\Http\Controllers;

use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    function index(){
        $data['tahunajarans'] = TahunAjaran::all();
        return view('dashboard.kelas.ta.ta',$data);
    }
    function add_form(){
        return view('dashboard.kelas.ta.addTa');
    }
    function save(Request $request){
        $request->validate([
            'kode' => 'required',
            'keterangan' => 'required'
        ],[
            'kode.required' => 'Kode Tahun Ajaran wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi'
        ]);

        $data = [
            'kode_tahun_ajaran'=>$request->kode,
            'keterangan'=>$request->keterangan,
            'status'=>$request->status
        ];

        try {
            //code...
            TahunAjaran::create($data);
            return redirect()->route('tahun.ajaran')->with('success','Tahun Ajaran berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('tahun.ajaran')->withErrors('Tahun Ajaran gagal ditambahkan |'+$e->getMessage());
        }
    }
    function update(Request $request){

    }
    function delete(Request $request){

    }
}
