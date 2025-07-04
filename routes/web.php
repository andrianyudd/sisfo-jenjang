<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\KonversiController;
use App\Http\Controllers\MataKuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata');
Route::post('/biodata', [BiodataController::class, 'store'])->name('biodata.store');
// Route::get('/index', [BiodataController::class, 'pengajuanKonversi'])->name('konversi.index');

Route::get('/unggah_dokumen', function () {
    return view('unggah_dokumen');
})->name('unggah_dokumen');

Route::resource('mata_kuliah', MataKuliahController::class);

Route::get('/konversi', [KonversiController::class, 'index'])->name('konversi.index');
Route::get('/konversi/{nim}/detail', [KonversiController::class, 'show'])->name('detail');
// Route::get('/konversi/create', [KonversiController::class, 'create'])->name('konversi.create');


Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
