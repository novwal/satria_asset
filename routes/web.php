<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\StatusAssetController;
use App\Http\Controllers\PeminjamanAssetController;
use App\Http\Controllers\MasterLokasiController; 

Route::get('/', function () {
    return view('welcome');
});
Route::match(['get', 'post'], '/', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate']);
Route::get('/dashboard', [App\Http\Controllers\LoginController::class, 'dashboard'])->name('dashboard');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('/master-asset', [AssetController::class, 'index'])->name('master_asset');
Route::get('/status-asset', [StatusAssetController::class, 'index'])->name('status_asset');
Route::get('/peminjaman-asset', [PeminjamanAssetController::class, 'index'])->name('peminjaman_asset');
Route::get('/master-lokasi', [MasterLokasiController::class, 'index'])->name('master_lokasi');
Route::post('/asset', [AssetController::class, 'store'])->name('asset.store');
