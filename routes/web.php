<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenawaranController;

Route::get('/', function () {
    return view('/Home');
});

Route::get('penawaran', function () {
    return view('/Penawaran');
});

Route::get('penilaian', function () {
    return view('/Penilaian');
});

Route::get('/penawaran/cetak/{id}', [PenawaranController::class, 'cetak'])->name('penawaran.cetak');
Route::get('/penawaran', [PenawaranController::class, 'penawaran'])->name('penawaran');
Route::resource('/penawaran', PenawaranController::class);

