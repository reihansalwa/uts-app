<?php

use App\Http\Controllers\PenyimpananBarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PenyimpananBarangController::class, 'index']);
Route::get('/create', [PenyimpananBarangController::class, 'create']);
Route::post('/store', [PenyimpananBarangController::class, 'store']);
