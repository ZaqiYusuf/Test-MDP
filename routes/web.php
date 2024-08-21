<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/buku', [ViewController::class, 'index'])->name('index');

Route::get('/buku/create', [ViewController::class, 'create'])->name('buku');
Route::post('/buku/store', [BukuController::class, 'store'])->name('store');

