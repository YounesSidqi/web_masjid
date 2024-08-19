<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DoaController;
use App\Http\Controllers\DzikirController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SurahController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/surah', [SurahController::class, 'surah'])->name('surah');

Route::get('/surah/detail/{id}', [SurahController::class, 'surahdetail'])->name('surahdetail');


Route::get('/dzikir_after_salah', [DzikirController::class, 'dzikir_after_salah'])->name('dzikir_after_salah');

Route::get('/dzikir_pagi', [DzikirController::class, 'dzikir_pagi'])->name('dzikir_pagi');

Route::get('/dzikir_petang', [DzikirController::class, 'dzikir_petang'])->name('dzikir_petang');

Route::get('/doa', [DoaController::class, 'doa'])->name('doa');
Route::get('/doa/detail/{id}', [DoaController::class, 'doadetail'])->name('doadetail');
