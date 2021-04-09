<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AspirasiController;

use App\Http\Controllers\PenController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('menulaporan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Petugas
Route::get('/datapetugas',[AuthController::class, 'index']);
Route::get('/dashboard/tambah/admin',[AuthController::class,'add']);
Route::get('/petugas/{id}/delete',[AuthController::class,'delete']);
Route::POST('/postregister',[AuthController::class,'postregister']);
//Kategori
//Kategori
Route::get('/datakategori',[KategoriController::class,'index']);
Route::get('/dashboard/tambah/kategori',[KategoriController::class,'add']);
Route::POST('/storekategori',[KategoriController::class,'store']);
Route::get('/kategori/{id}/delete',[KategoriController::class,'delete']);
Route::get('/kategori/{id}/edit',[KategoriController::class,'edit']);
Route::POST('/kategori/{id}/update',[KategoriController::class,'update']);
//Penduduk
Route::get('/datapenduduk',[PenController::class,'index']);
Route::get('/dashboard/tambah/penduduk',[PenController::class,'add']);
Route::POST('/storependuduk',[PenController::class,'store']);
Route::get('/penduduk/{id}/edit',[PenController::class,'edit']);
Route::get('/penduduk/{id}/delete',[PenController::class,'delete']);
Route::POST('/penduduk/{id}/update',[PenController::class,'update']);
//Lapor
Route::get('/lapor',[AspirasiController::class, 'lapor']);
Route::get('/menulaporan',[AspirasiController::class,'menu']);
Route::POST('/postlapor',[AspirasiController::class,'postlapor']);
Route::get('/aspirasimasyarakat',[AspirasiController::class,'index']);
Route::get('/aspirasi/{id}/proses',[AspirasiController::class,'proses']);
Route::get('/aspirasi/{id}/selesai',[AspirasiController::class,'selesai']);
//Riwayat Aspirasi
Route::get('/riwayat',[AspirasiController::class,'riwayat']);
Route::get('/history/riwayat',[AspirasiController::class,'indexriw']);
Route::get('/history/riwayatnik',[AspirasiController::class,'indexriwnik']);
Route::get('/riwayat/{id}/aspirasi',[AspirasiController::class,'datariwayat']);
Route::POST('/riwayat/{id}/feedback',[AspirasiController::class,'feedback']);
Route::get('/pernahlapor',[AspirasiController::class,'pernah']);
Route::get('/caripernahlapor',[AspirasiController::class,'caripernah']);
Route::get('/tambahlaporan/{id}/aspirasi',[AspirasiController::class,'tambah']);
Route::POST('/postpernahlapor',[AspirasiController::class,'postpernahlapor']);
Route::get('/dashboard/historyaspirasi',[AspirasiController::class,'history']);
Route::get('/riwayatidlaporan',[AspirasiController::class,'riwayatidlaporan']);
Route::get('/data/{id}/riwayat',[AspirasiController::class,'tampilan']);