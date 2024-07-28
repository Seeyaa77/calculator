<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KalkulatorController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/kalkulator', function () {
    return view('kalkulator');
});

Route::get('/kalkulator', [KalkulatorController::class, 'index']);
Route::post('/kalkulator/hitung', [KalkulatorController::class, 'hitung'])->name('hitung');