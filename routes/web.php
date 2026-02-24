<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController; // Pastikan untuk melakukan import ini

// Mendaftarkan rute resource untuk koleksi perpustakaan
Route::resource('koleksi', BukuController::class);