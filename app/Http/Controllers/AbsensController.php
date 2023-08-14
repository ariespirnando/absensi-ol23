<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Jurusan;
use App\Models\Pelajaran;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class AbsensController extends Controller
{
    //
    function index(){
        return view('dashboard.absensi.absensi');
    }

    function add_form(){
        $data['kelas'] = Kelas::all();
        $data['pelajaran'] = Pelajaran::all();
        $data['tahunajaran'] = TahunAjaran::all();
        $data['jurusan'] = Jurusan::all();
        return view('dashboard.absensi.addAbsensi',$data);
    }

    // <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(256)->generate('https://google.com')) !!} ">
}
