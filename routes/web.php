<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ObatController;

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

Route::get('/', function () {return view('welcome');});
//Login
Route::get('/login', [AuthController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class,'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');

//Register
Route::get('/register', [AuthController::class,'create'])->name('create')->middleware('guest');
Route::post('/register', [AuthController::class,'store'])->name('store');

//Edit profil
Route::get('/profil', [AuthController::class,'profil'])->name('profil')->middleware('auth');
Route::get('/edit_profil', [AuthController::class,'edit_profil'])->name('edit_profil')->middleware('auth');
Route::put('/edit_profil/{id}', [AuthController::class,'update_profil'])->name('update_profil');


//Tampil Data Obat
Route::get('/main', [ObatController::class,'index'])->name('main')->middleware('auth');
//Tambah Obat
Route::get('/data', [ObatController::class,'create'])->name('create')->middleware('auth');
Route::get('/tambah', function(){
    return view('page.tambah_obat');
})->middleware('auth');
Route::post('/tambah_obat',[ObatController::class,'store'])->name('store');
//Edit Obat
Route::put('/edit_obat/{id}',[ObatController::class,'update'])->name('update');
Route::get('/edit_obat/{id} ', [ObatController::class,'edit'])->name('edit')->middleware('auth');
//Delete Obat
Route::get('/hapus_obat/{id} ', [ObatController::class,'destroy'])->name('destroy')->middleware('auth');