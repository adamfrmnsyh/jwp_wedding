<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KatalogController as AdminKatalogController;
use App\Http\Controllers\Admin\PesananController as AdminPesananController;
use App\Http\Controllers\Admin\KontakController as AdminKontakController;
use App\Http\Controllers\UserKatalogController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home.index');
});
Route::get('/katalog', function () {
    return view('home.katalog');
});
Route::get('/kontak', function () {
    return view('home.kontak');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Katalog
    Route::get('/katalog', [AdminKatalogController::class, 'index'])->name('katalog.index');
    Route::get('/katalog/create', [AdminKatalogController::class, 'create'])->name('katalog.create');
    Route::post('/katalog', [AdminKatalogController::class, 'store'])->name('katalog.store'); // ⬅️ baru
    Route::get('/katalog/{id}/edit', [AdminKatalogController::class, 'edit'])->name('katalog.edit');
    Route::put('/katalog/{id}', [AdminKatalogController::class, 'update'])->name('katalog.update'); // ⬅️ baru
    Route::delete('/katalog/{id}', [AdminKatalogController::class, 'destroy'])->name('katalog.destroy'); // ⬅️ baru

    // Pesanan
    Route::get('/pesanan', [AdminPesananController::class, 'index'])->name('pesanan.index');

    // Kontak
    Route::get('/kontak', [AdminKontakController::class, 'index'])->name('kontak.index');
});

Route::get('/katalog', [UserKatalogController::class, 'index'])->name('user.katalog');

require __DIR__.'/auth.php';
