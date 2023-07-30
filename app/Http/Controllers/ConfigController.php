<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    //
    function index(){
        return view('dashboard.config.config');
    }
    function update(Request $request){

    }
}
