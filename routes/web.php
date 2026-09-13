<?php

use Illuminate\Support\Facades\Route;

// 1. /: home
Route::get('/', function () {
    return "
    <!DOCTYPE html>
    <html lang='id'>
    <head>
        <title>Profil Akademis ITS</title>
        <style>
            body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f3f4f6; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
            .card { background: white; padding: 2.5rem; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); text-align: center; max-width: 400px; border-top: 5px solid #00426D; }
            h1 { color: #00426D; margin-bottom: 0.5rem; font-size: 24px; }
            p { color: #4b5563; line-height: 1.6; font-size: 15px; }
            .badge { display: inline-block; background-color: #e5e7eb; padding: 4px 12px; border-radius: 20px; font-size: 13px; font-weight: bold; margin-bottom: 15px; }
            .btn { display: inline-block; margin-top: 15px; padding: 10px 20px; background-color: #00426D; color: white; text-decoration: none; border-radius: 6px; font-weight: 500; transition: background 0.3s; }
            .btn:hover { background-color: #002d4a; }
        </style>
    </head>
    <body>
        <div class='card'>
            <span class='badge'>Tugas Mandiri PBKK</span>
            <h1>Vivat! Hidup ITS!</h1>
            <p>Selamat datang di platform profil akademis statis.</p>
            <p><strong>Mario Napitupulu</strong><br>Teknik Informatika</p>
            
            <!-- Link disesuaikan tanpa prefix dashboard -->
            <a href='/mahasiswa/5025241085' class='btn'>Cek Detail Profil</a>
        </div>
    </body>
    </html>
    ";
})->name('home');


// 2. /mahasiswa/{nrp}: detail profil pemilik NRP
// Rule 2: Gunakan regex where() untuk kombinasi NRP ITS 10 digit
Route::get('/mahasiswa/{nrp}', function ($nrp) {
    return "<h2>Detail Profil Mahasiswa</h2>
            <p>NRP: {$nrp}</p>
            <p>Nama: Mario Napitupulu</p>
            <p>Departemen: Teknik Informatika</p>";
})->where('nrp', '[0-9]{10}')->name('mahasiswa.detail');


// 3. /agent/{tema}: parameter opsional tema platform AI
Route::get('/agent/{tema?}', function ($tema = 'General Assistant Agent') {
    return "<h2>Proyeksi Ide Akhir Semester Agentic AI</h2>
            <p>Tema Platform yang diusulkan: <strong>{$tema}</strong></p>";
})->name('agent.idea');


// 4. /hitung-ipk/{ipk1}/{ipk2}: kalkulator ipk otomatis
// Parameter disesuaikan persis dengan form: ipk1 dan ipk2
Route::get('/hitung-ipk/{ipk1}/{ipk2}', function ($ipk1, $ipk2) {
    $rata_rata = ($ipk1 + $ipk2) / 2;
    return "<h2>Kalkulator Portofolio Akademis</h2>
            <p>IP Semester A: {$ipk1}</p>
            <p>IP Semester B: {$ipk2}</p>
            <p><strong>Rata-rata IPK: {$rata_rata}</strong></p>";
})->where(['ipk1' => '[0-9\.]+', 'ipk2' => '[0-9\.]+'])->name('kalkulator.ipk');


// Rule 3: Gunakan rute fallback (Route::fallback()) jika page tidak ditemukan
Route::fallback(function () {
    return "<h2>Waduh! Halaman (404)</h2>
            <p>Rute yang kamu tuju tidak terdaftar di sistem. Silakan kembali ke <a href='".route('home')."'>Halaman Utama</a>.</p>";
})->name('fallback');