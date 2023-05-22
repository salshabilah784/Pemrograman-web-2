<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/salam',function(){
    return view('salam',[
        "nama"=>"Salsha bilah",
        "umur"=>19
    ]);
});

Route::get('/tugas',function(){
    return view('tugas',[
        "nama"=>"Salsha bilah",
        "tanggal_pemeriksaan"=>"3 April 2023",
        "umur"=>19,
        "jenis_kelamin"=>"perempuan"
    ]);
});

Route::get('/nilai',function(){
    return view('nilai');
});

Route::get('/form',[FormController::class, 'index']);

Route::post('/hasil',[FormController::class, 'hasil']);
