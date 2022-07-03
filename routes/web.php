<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\mahasiswaController;

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
    return view('welcome');
});

Route::get('/mahasiswa', [mahasiswaController::class,'index']);
Route::get('/mahasiswa/create', [mahasiswaController::class,'create']);
Route::post('/mahasiswa/store', [mahasiswaController::class,'store']);
Route::get('/mahasiswa/{id}/edit', [mahasiswaController::class,'edit']);
Route::put('/mahasiswa/{id}/', [mahasiswaController::class,'update']);
Route::delete('/mahasiswa/{id}/', [MahasiswaController::class, 'destroy']);