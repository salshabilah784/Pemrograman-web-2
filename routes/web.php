<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;
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
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

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

Route::get('/formtugas',[TugasController::class, 'form']);
Route::post('/hasiltugas',[TugasController::class, 'hasiltugas']);

//grup route admin
Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[DashboardController::class, 'index']);
    Route::get('/produk',[ProdukController::class, 'index']);
    Route::get('/kategori_produk',[KategoriController::class, 'index']);
    Route::get('/pesanan',[PesananController::class, 'index']);
    Route::get('/produk/create',[ProdukController::class, 'create']);
    Route::post('/produk/store',[ProdukController::class, 'store']);
    Route::get('/produk/edit/{id}',[ProdukController::class, 'edit']);
    Route::post('/produk/update/{id}',[ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}',[ProdukController::class, 'destroy']);

    Route::get('/pesanan/create', [PesananController::class, 'create']);
    Route::post('/pesanan/store', [PesananController::class, 'store']);
    Route::get('pesanan/edit/{id}', [PesananController::class, 'edit']);
    Route::post('pesanan/update/{id}', [PesananController::class, 'update']);
    Route::get('pesanan/delete/{id}', [PesananController::class, 'destroy']);
    });
});

Route::prefix('frontend')->group(function(){
    Route::get('/dashboard',[FrontendController::class, 'index']);
    Route::get('/about',[FrontendController::class, 'about']);
    Route::get('/halaman',[FrontendController::class, 'halaman']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
