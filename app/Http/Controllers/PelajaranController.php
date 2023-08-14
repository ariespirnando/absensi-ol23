<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    function index(){
        $data['pelajarans'] = Pelajaran::all();
        return view('dashboard.kelas.pelajaran.pelajaran',$data);
    }
    function add_form(){
        return view('dashboard.kelas.pelajaran.addPelajaran');
    }

    function save(Request $request){
        $request->validate([
            'kode' => 'required',
            'keterangan' => 'required'
        ],[
            'kode.required' => 'Kode Pelajaran wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi'
        ]);

        $data = [
            'kode_pelajaran'=>$request->kode,
            'keterangan'=>$request->keterangan,
            'status'=>$request->status
        ];

        try {
            //code...
            Pelajaran::create($data);
            return redirect()->route('pelajaran')->with('success','Pelajaran berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('pelajaran')->withErrors('Pelajaran gagal ditambahkan |'+$e->getMessage());
        }
    }
    function delete($id){
        try {
            Pelajaran::find($id)->delete();
            return redirect()->route('pelajaran')->with('success','pelajaran berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->route('pelajaran')->withErrors('pelajaran gagal dihapus |'+$e->getMessage());
        }
    }
    function update(Request $request){

    }
}
