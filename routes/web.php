<?php

use App\Http\Controllers\LivreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LivreController::class,'index'])->name('home');
//read
Route::get('/livres/{id}', [LivreController::class,'showLivres'])->name('showLivres')->whereNumber('id');
//create
Route::get('/livres/create', [LivreController::class,'createLivre'])->name('createLivre');
Route::post('/livres/create', [LivreController::class,'saveLivre'])->name('saveLivre');
//delete
Route::get('/livres/delete/{id}', [LivreController::class,'deleteLivres'])->name('deleteLivres')->whereNumber('id');
//update
Route::get('/livres/update/{id}', [LivreController::class,'updateLivres1'])->name('updateLivres1')->whereNumber('id');
Route::post('/livres/update/{id}', [LivreController::class,'updateLivres2'])->name('updateLivres2')->whereNumber('id');;




//Route::get('/', [GalopController::class,'index'])->name('home');
//Route::get('/essai', [GalopController::class,'essai'])->name('essai');
