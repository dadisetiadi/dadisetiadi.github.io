<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\BarangController;
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

Route::get('/', [HalamanController::class, 'dashboard'])->name('dashboard');

Route::get('/databarang', [BarangController::class, 'index'])->name('databarang');
Route::get('/create-barang', [BarangController::class, 'create'])->name('create-barang');
Route::post('/simpan-barang', [BarangController::class, 'store'])->name('simpan-barang');
Route::get('databarang/{id}', [BarangController::class, 'delete']);

