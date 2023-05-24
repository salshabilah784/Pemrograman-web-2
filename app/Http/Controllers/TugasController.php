<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function form(){
        return view('formtugas');
    }
    public function hasiltugas(Request $request){
        $this->validate($request,[
            "nama" =>'required',
            "email" =>'required',
            "lokasi" =>'required',
            "jenis_kelamin" =>'required',
            "skill" =>'required',
        ]);
        return view('hasiltugas',['data' => $request]);
    }
}
