<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

//rotta della home
Route::get('/home', [PublicController::class, 'home'])->name('home');
