<?php

use App\Http\Controllers\UserUkkController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[UserUkkController::class, 'index'])->name('login');
Route::post('/',[UserUkkController::class, 'login'])->name('User.login');
Route::get('/registrasi',[UserUkkController::class,'from_registrasi']);
Route::post('/registrasi',[UserUkkController::class,'registrasi']);

Route::get('logout',[UserUkkController::class,'logout']);


Route::get('/admin',[UserUkkController::class, 'user']);
Route::get('/petugas',[UserUkkController::class, 'user']);
Route::get('/peminjam',[UserUkkController::class, 'user']);

Route::get('/create',[UserUkkController::class, 'create']);
Route::post('create',[UserUkkController::class,'createe'])->name('User.createe');

Route::get('/updatee/{id}',[UserUkkController::class, 'updatee']);

// Route::get('/from_update/{id}',[UserController::class,'from_update']);
Route::post('/updatee/{id}',[UserUkkController::class,'updateedit'])->name('User.updateedit');

Route::get('/delete/{id}',[UserUkkController::class,'delete']);

Route::get('/peminjaman/{id}', [UserUkkController::class, 'halaman_peminjaman']);
Route::put('peminjaman/{id}',[UserUkkController::class, 'peminjaman']);

Route::get('/laporan', [UserUkkController::class, "laporan3"]);

