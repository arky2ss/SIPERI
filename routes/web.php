
<?php

use Illuminate\Support\Facades\Route;

// Halaman Beranda (Landing Page & Pilihan Paket)
Route::get('/', function () {
    return view('pelanggan.beranda');
})->name('beranda');

Route::get('/beranda', function () {
    return view('pelanggan.beranda');
});

// Langkah 2: Pilih MUA
Route::get('/pilih-mua', function () {
    return view('pelanggan.pilih-mua');
})->name('pilih-mua');

// Langkah 3: Atur Jadwal & Ringkasan Pesanan
Route::get('/atur-jadwal', function () {
    return view('pelanggan.atur-jadwal');
})->name('atur-jadwal');

// Masuk sebagai Admin
Route::get('/login', function () {
    return view('auth.login-admin');
})->name('login');

Route::get('/register', function () {
    return 'Halaman Registrasi Admin / Pelanggan';
})->name('register');
