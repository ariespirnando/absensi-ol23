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
    function add_form(){
        return view('dashboard.kelas.jurusan.addjurusan');
    }
    function edit_form($id){
        $data['jurusan'] = Jurusan::find($id);
        return view('dashboard.kelas.jurusan.addjurusan');
    }
    function delete($id){
        try {
            Jurusan::find($id)->delete();
            return redirect()->route('jurusan')->with('success','Jurusan berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->route('jurusan')->withErrors('Jurusan gagal dihapus |'+$e->getMessage());
        }
    }

    function save(Request $request){
        $request->validate([
            'kode' => 'required',
            'keterangan' => 'required'
        ],[
            'kode.required' => 'Kode Jurusan wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi'
        ]);

        $data = [
            'kode_jurusan'=>$request->kode,
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

}
