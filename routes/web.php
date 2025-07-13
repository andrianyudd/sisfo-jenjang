<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\KonversiController;
use App\Http\Controllers\MataKuliahController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect('/dashboard');
    }
    return view('landing');
});

// Email verification routes
Route::middleware(['auth'])->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect()->route('login')->with('success', 'Email berhasil diverifikasi! Silakan login.');
    })->middleware(['signed'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Link verifikasi telah dikirim ke email Anda!');
    })->middleware(['throttle:6,1'])->name('verification.send');
});

// Routes yang memerlukan authentication
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');
    
    Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata');
    Route::post('/biodata', [BiodataController::class, 'store'])->name('biodata.store');
    // Route::get('/index', [BiodataController::class, 'pengajuanKonversi'])->name('konversi.index');

    Route::get('/unggah_dokumen', function () {
        $biodata_id = auth()->user()->biodata->id ?? null;
        return view('unggah_dokumen', compact('biodata_id'));
    })->name('unggah_dokumen');

    Route::post('/unggah_dokumen', [\App\Http\Controllers\DokumenController::class, 'upload'])->name('unggah_dokumen.upload');

    Route::resource('mata_kuliah', MataKuliahController::class);

    Route::get('/konversi', [KonversiController::class, 'index'])->name('konversi.index');
    Route::get('/konversi/{nim}/detail', [KonversiController::class, 'show'])->name('detail');
    // Route::get('/konversi/create', [KonversiController::class, 'create'])->name('konversi.create');
});

// Routes untuk guest (belum login)
Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('login');
    });
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/profile/password', [App\Http\Controllers\AuthController::class, 'changePassword'])->name('profile.password.update');
