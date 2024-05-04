<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

//rotta della home
Route::get('/', [PublicController::class, 'home'])->name('home')->middleware('auth');

Route::get('/edit/{chirp}', [PublicController::class, 'edit'])->name('edit')->middleware('auth');
