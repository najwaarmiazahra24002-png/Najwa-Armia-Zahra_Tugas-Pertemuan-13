<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;

// tugas 1 dan 2 Pertemuan 11
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/', function () {
    return view('home');
})->name('home');

// Tugas 3 Pertemuan 12
Route::get('/buku/export', [BukuController::class, 'export'])
    ->name('buku.export');

// Tugas 2 Pertemuan 12
Route::post('/buku/bulk-delete', [BukuController::class, 'bulkDelete'])
    ->name('buku.bulk-delete');

// Custom route untuk filter kategori
Route::get('/buku/kategori/{kategori}', [BukuController::class, 'filterKategori'])
    ->name('buku.kategori');

// Tugas 3 pertemuan 11
Route::resource('buku', BukuController::class);

// Tugas 2 Pertemuan 13
Route::get('/anggota/export', [AnggotaController::class, 'export'])
    ->name('anggota.export');

// Resource route untuk Anggota (akan dibuat nanti)
Route::resource('anggota', AnggotaController::class);