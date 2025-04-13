<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'] )->name('home');

Route::get("/Giocatori", [PublicController::class, 'giocatori'] )->name('Giocatori'); 

Route::get("/Sponsor", [PublicController::class, 'Sponsor'] )->name('Sponsor');

Route::get('/dettagli/{id}', [PublicController::class, 'dettagli'])->name('dettagli');

