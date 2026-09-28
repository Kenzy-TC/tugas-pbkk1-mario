<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/beranda', [PageController::class, 'home'])
    ->name('beranda');

Route::get('/profil-mahasiswa', [PageController::class, 'profile'])
    ->name('profil');

Route::get('/ide-agent', [PageController::class, 'agent'])
    ->name('ide-agent');

Route::post('/ide-agent', [PageController::class, 'submitIdea'])
    ->name('ide-agent.submit');