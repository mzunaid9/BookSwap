<?php

use App\Http\Controllers\LivreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LivreController::class,'index'])->name('home');

//Route::get('/', [GalopController::class,'index'])->name('home');
//Route::get('/essai', [GalopController::class,'essai'])->name('essai');
