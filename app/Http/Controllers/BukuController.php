<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Import untuk Type-Hinting View

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // Menyiapkan array judul buku (minimal 3 judul)
        $data_buku = [
            "Belajar Laravel 12 untuk Pemula",
            "Struktur Data dan Algoritma",
            "Sistem Basis Data Lanjut",
            "Pemrograman Web Canggih"
        ];

        // Mengirim data ke view perpus_index.blade.php
        return view('perpus_index', [
            'daftar_buku' => $data_buku
        ]);
    }

    // ... method create dan store biarkan kosong atau bawaan ...

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mengembalikan teks dengan ID spesifik
        return "Anda sedang melihat detail buku dengan Kode: " . $id;
    }

    // ... method edit, update, dan destroy biarkan kosong atau bawaan ...
}